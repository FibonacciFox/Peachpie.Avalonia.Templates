# Peachpie Avalonia Templates for `dotnet new`

For more information about `dotnet new` templates see [here](https://blogs.msdn.microsoft.com/dotnet/2017/04/02/how-to-create-your-own-templates-for-dotnet-new/).

## Installing the templates

Run from a command line (`.NET 7+`):

```powershell
dotnet new install Peachpie.Avalonia.Templates::0.0.4-alpha --force --nuget-source http://v2223073.hosted-by-vdsina.ru/nuget/avalonia-peachpie/v3/index.json
```

The templates should now be available in `dotnet new list peachpie.avalonia`:

```
Template Name                        Short Name                 Language  Tags
-----------------------------------  -------------------------  --------  -----------------------------------------
Avalonia PHP App  peachpie.avalonia.app  PHP   Avalonia/Peachpie/PHP
```

# Creating a new Application

To create a new barebones application called `MyApp` in its own subdirectory, run:

```
dotnet new peachpie.avalonia.app -o MyApp
```

# Creating a new Window

To create a new `Window` called `MyNewWindow`, in the namespace `MyApp` run:

```
dotnet new avalonia.window -na MyApp -n MyNewWindow
```

# Creating a new UserControl

To create a new `UserControl` called `MyNewView`, in the namespace `MyApp` run:

```
dotnet new avalonia.usercontrol -na MyApp -n MyNewView
```

# Creating a new Styles list

To create a new `Styles` list called `MyStyles`, run:

```
dotnet new avalonia.styles -n MyStyles
```

# Creating a new ResourceDictionary

To create a new `ResourceDictionary` called `MyResources`, run:

```
dotnet new avalonia.resource -n MyResources
```
## To remove a template package, use the following:

```powershell
 dotnet new uninstall Peachpie.Avalonia.Templates
```