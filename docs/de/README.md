# IPSymconMyStrom
[![Version](https://img.shields.io/badge/Symcon-PHPModul-red.svg)](https://www.symcon.de/service/dokumentation/entwicklerbereich/sdk-tools/sdk-php/)
[![Version](https://img.shields.io/badge/Symcon%20Version-%3E%205.1-green.svg)](https://www.symcon.de/service/dokumentation/installation/)

Modul für IP-Symcon ab Version 4.3 ermöglicht das Schalten von myStrom Switch und myStrom Bulb.

## Dokumentation

**Inhaltsverzeichnis**

1. [Funktionsumfang](#1-funktionsumfang)  
2. [Voraussetzungen](#2-voraussetzungen)  
3. [Installation](#3-installation)  
4. [Funktionsreferenz](#4-funktionsreferenz)
5. [Konfiguration](#5-konfiguartion)  
6. [Anhang](#6-anhang)  

## 1. Funktionsumfang

Mit dem Modul lassen myStrom Switch und myStrom Bulb aus IP-Symcon (ab Version 4.3) schalten. 

## 2. Voraussetzungen

 - IP-Symcon 5.1
 - myStrom Bulb oder myStrom Switch
 - mac Adresse des Geräts
 - IP Adresse des Geräts

## 3. Installation

### a. Laden des Moduls

Die Webconsole von IP-Symcon mit _http://<IP-Symcon IP>:3777/console/_ öffnen. 


Anschließend oben rechts auf das Symbol für den Modulstore klicken

![Store](img/store_icon.png?raw=true "open store")

Im Suchfeld nun

```
MyStrom
```  

eingeben

![Store](img/module_store_search.png?raw=true "module search")

und schließend das Modul auswählen und auf _Installieren_

![Store](img/install.png?raw=true "install")

drücken.


#### Alternatives Installieren über Modules Instanz

Den Objektbaum _Öffnen_.

![Objektbaum](img/objektbaum.png?raw=true "Objektbaum")	

Die Instanz _'Modules'_ unterhalb von Kerninstanzen im Objektbaum von IP-Symcon (>=Ver. 5.x) mit einem Doppelklick öffnen und das  _Plus_ Zeichen drücken.

![Modules](img/Modules.png?raw=true "Modules")	

![Plus](img/plus.png?raw=true "Plus")	

![ModulURL](img/add_module.png?raw=true "Add Module")
 
Im Feld die folgende URL eintragen und mit _OK_ bestätigen:

```
https://github.com/Wolbolar/IPSymconMyStrom
```  
	
Anschließend erscheint ein Eintrag für das Modul in der Liste der Instanz _Modules_    

Es wird im Standard der Zweig (Branch) _master_ geladen, dieser enthält aktuelle Änderungen und Anpassungen.
Nur der Zweig _master_ wird aktuell gehalten.

![Master](img/master.png?raw=true "master") 

Sollte eine ältere Version von IP-Symcon die kleiner ist als Version 5.1 (min 4.3) eingesetzt werden, ist auf das Zahnrad rechts in der Liste zu klicken.
Es öffnet sich ein weiteres Fenster,

![SelectBranch](img/select_branch.png?raw=true "select branch") 

hier kann man auf einen anderen Zweig wechseln, für ältere Versionen kleiner als 5.1 (min 4.3) ist hier
_Old-Version_ auszuwählen. 


### b. Einrichtung in IP-Symcon
	
In IP-Symcon nun _Instanz hinzufügen_ (_Rechtsklick -> Objekt hinzufügen -> Instanz_) auswählen unter der Kategorie, unter der man die MyStrom hinzufügen will,
und _myStrom_ auswählen.
Im Konfigurationsformular ist die IP Adresse des Geräts sowie die MAC Adresse des Geräts einzutragen und der Typ (Switch/Bulb) auszuwählen. 


## 4. Funktionsreferenz

### myStrom:

Funktionen siehe Anhang.


## 5. Konfiguration:

### myStrom:

| Eigenschaft | Typ     | Standardwert | Funktion                                  |
| :---------: | :-----: | :----------: | :---------------------------------------: |
| ip          | string  |              | IP Adresse Gerät myStrom                  |
| mac         | string  |              | MAC Adresse Gerät myStrom                 |


## 6. Anhang

###  a. Funktionen:

#### myStrom:

`MyStrom_DataUpdate(integer $InstanceID)`

Aktualisiert die Daten

`MyStrom_PowerOff(integer $InstanceID)`

Gerät einschalten

`MyStrom_PowerOn(integer $InstanceID)`

Gerät ausschalten

`MyStrom_GetTemperature(integer $InstanceID)`

Temperatur auslesen

`MyStrom_White(integer $InstanceID)`

Lampe auf weiß stellen

`MyStrom_Red(integer $InstanceID)`

Lampe auf rot stellen

`MyStrom_Green(integer $InstanceID)`

Lampe auf grün stellen

`MyStrom_Blue(integer $InstanceID)`

Lampe auf blau stellen

`MyStrom_HSV(integer $InstanceID, integer $hue, integer $saturation, integer $brightness)`

Lampe auf Farbe einstellen


###  b. GUIDs und Datenaustausch:

#### MyStrom:

GUID: `{C6D2D58D-E32A-5F1A-42B6-35E0E6915623}` 

### c. Quellen

[myStrom REST API](https://mystrom.ch/wp-content/uploads/REST_API_WRB.txt "myStrom REST API")