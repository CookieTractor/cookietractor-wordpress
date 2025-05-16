# 🔢 Set version here
$version = "1.0.3"

# Paths
$pluginName = "cookietractor"
$pluginFolder = Join-Path $PSScriptRoot "plugin"
$pluginMainFile = Join-Path $pluginFolder "cookietractor.php"
$buildFolder = Join-Path $PSScriptRoot "build"

# Make sure the main plugin file exists
if (!(Test-Path $pluginMainFile)) {
    Write-Error "❌ Main plugin file not found: $pluginMainFile"
    exit 1
}

# Update the Version: line in entry point
(Get-Content $pluginMainFile) | ForEach-Object {
    if ($_ -match '^\s*\*\s*Version:\s*.+') {
        $_ -replace 'Version:\s*.+', "Version: $version"
    } else {
        $_
    }
} | Set-Content $pluginMainFile

Write-Host "🔧 Updated version in $pluginMainFile to $version"

# Create build folder if needed
if (!(Test-Path $buildFolder)) {
    New-Item -ItemType Directory -Path $buildFolder | Out-Null
}

# Define zip file path
$zipFileName = "$pluginName-$version.zip"
$zipFilePath = Join-Path $buildFolder $zipFileName

# Remove existing zip if it exists
if (Test-Path $zipFilePath) {
    Remove-Item $zipFilePath
}

# Create the zip
Compress-Archive -Path "$pluginFolder\*" -DestinationPath $zipFilePath

Write-Host "✅ Plugin built and zipped as: $zipFilePath"
