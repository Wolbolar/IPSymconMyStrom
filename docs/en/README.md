# IPSymconMyStrom
[![Version](https://img.shields.io/badge/Symcon-PHPModule-red.svg)](https://www.symcon.de/service/dokumentation/entwicklerbereich/sdk-tools/sdk-php/)
[![Version](https://img.shields.io/badge/Symcon%20Version-%3E%205.1-green.svg)](https://www.symcon.de/en/service/documentation/installation/)

Module for IP Symcon Version 4.3 or higher enables the switching of myStrom Switch and myStrom Bulb.

## Documentation

**Table of Contents**

1. [Features](#1-features)
2. [Requirements](#2-requirements)
3. [Installation](#3-installation)
4. [Function reference](#4-functionreference)
5. [Configuration](#5-configuration)
6. [Annex](#6-annex)

## 1. Features

The module can control myStrom Switch and myStrom Bulb from IP Symcon (version 4.3 or higher).

## 2. Requirements

 - IP-Symcon (min 4.3)
 - myStrom Bulb or myStrom Switch
 - mac address of the device
 - IP address of the device

## 3. Installation

### a. Loading the module

Open the IP Console's web console with _http://<IP-Symcon IP>:3777/console/_.

Then click on the module store icon in the upper right corner.

![Store](img/store_icon.png?raw=true "open store")

In the search field type

```
MyStrom
```  


![Store](img/module_store_search_en.png?raw=true "module search")

Then select the module and click _Install_

![Store](img/install_en.png?raw=true "install")


#### Install alternative via Modules instance

_Open_ the object tree.

![Objektbaum](img/object_tree.png?raw=true "object tree")	

Open the instance _'Modules'_ below core instances in the object tree of IP-Symcon (>= Ver 5.x) with a double-click and press the _Plus_ button.

![Modules](img/modules.png?raw=true "modules")	

![Plus](img/plus.png?raw=true "Plus")	

![ModulURL](img/add_module.png?raw=true "Add Module")
 
Enter the following URL in the field and confirm with _OK_:


```	
https://github.com/Wolbolar/IPSymconMyStrom
```
    
and confirm with _OK_.    
    
Then an entry for the module appears in the list of the instance _Modules_

By default, the branch _master_ is loaded, which contains current changes and adjustments.
Only the _master_ branch is kept current.

![Master](img/master.png?raw=true "master") 

If an older version of IP-Symcon smaller than version 5.1 (min 4.3) is used, click on the gear on the right side of the list.
It opens another window,

![SelectBranch](img/select_branch_en.png?raw=true "select branch") 

here you can switch to another branch, for older versions smaller than 5.1 (min 4.3) select _Old-Version_ .

### b.  Setup in IP-Symcon

In IP-Symcon add _Instance_ (_rightclick -> add object -> instance_) under the category under which you want to add the MyStrom instance,
and select _myStrom_.
In the configuration form, enter the IP address of the device as well as the MAC address of the device and select the type (Switch / Bulb).

Then confirm with _Apply Changes_.

![Apply_Changes](img/apply_changes_en.png?raw=true "Adpply Changes")


## 4. Function reference

### myStrom:  

Functions see appendix.


## 5. Configuration:

### myStrom:

| Property    | Type    | Value    | Description                                  |
| :---------: | :-----: | :------: | :------------------------------------------: |
| ip          | string  |          | IP adress device myStrom                     |
| mac         | string  |          | MAC adress device myStrom                    |

## 6. Annex

###  a. Functions:

#### myStrom:

`MyStrom_DataUpdate(integer $InstanceID)`

Updates the data

`MyStrom_PowerOff(integer $InstanceID)`

turn off a device

`MyStrom_PowerOn(integer $InstanceID)`

turn on a device

`MyStrom_GetTemperature(integer $InstanceID)`

get temperature

`MyStrom_White(integer $InstanceID)`

set the color of the lamp to white

`MyStrom_Red(integer $InstanceID)`

set the color of the lamp to red

`MyStrom_Green(integer $InstanceID)`

set the color of the lamp to green

`MyStrom_Blue(integer $InstanceID)`

set the color of the lamp to blue

`MyStrom_HSV(integer $InstanceID, integer $hue, integer $saturation, integer $brightness)`

set the color of the lamp


###  b. GUIDs and data exchange:

#### MyStrom:

GUID: `{C6D2D58D-E32A-5F1A-42B6-35E0E6915623}`

### c. Sources

[myStrom REST API](https://mystrom.ch/wp-content/uploads/REST_API_WRB.txt "myStrom REST API")