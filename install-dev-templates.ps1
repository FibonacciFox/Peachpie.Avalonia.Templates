dotnet new uninstall Peachpie.Avalonia.Templates
Remove-Item Peachpie.Avalonia.Templates/bin/**/*.nupkg
$result = dotnet pack | select-string "Successfully created package '(.*)'" -AllMatches
$package = $result.Matches.Groups[1]
dotnet new install $package