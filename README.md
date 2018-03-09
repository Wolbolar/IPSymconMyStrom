# IPSymconMyStrom

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

 - myStrom Bulb oder myStrom Switch
 - mac Adresse des Geräts
 - IP Adresse des Geräts

## 3. Installation

### a. Laden des Moduls


Die IP-Symcon (min Ver. 4.x) Konsole öffnen. Im Objektbaum unter Kerninstanzen die Instanz __*Modules*__ durch einen doppelten Mausklick öffnen.

![Modules](docs/Modules.png?raw=true "Modules")

In der _Modules_ Instanz rechts oben auf den Button __*Hinzufügen*__ drücken.

![Modules](docs/Hinzufuegen.png?raw=true "Hinzufügen")
 
In dem sich öffnenden Fenster folgende URL hinzufügen:

	
    `https://github.com/Wolbolar/IPSymconMyStrom`  
    
und mit _OK_ bestätigen.    


### b. Einrichtung in IPS
	
In IP-Symcon nun _Instanz hinzufügen_ (_CTRL+1_) auswählen unter der Kategorie, unter der man die myStrom Instanz hinzufügen will, und _myStrom_ auswählen.
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

#### AirVisual:

GUID: `{C6D2D58D-E32A-5F1A-42B6-35E0E6915623}` 

### c. Quellen

[myStrom REST API](https://mystrom.ch/wp-content/uploads/REST_API_WRB.txt "myStrom REST API")








