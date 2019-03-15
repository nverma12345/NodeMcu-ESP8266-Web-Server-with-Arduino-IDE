# NodeMcu-ESP8266-Web-Server-with-Arduino-IDE
NodeMCU is an open source IoT platform.It includes firmware which runs on the ESP8266 Wi-Fi SoC from Espressif Systems, and hardware which is based on the ESP-12 module.The term "NodeMCU" by default refers to the firmware rather than the development kits. The firmware uses the Lua scripting language. It is based on the eLua project, and built on the Espressif Non-OS SDK for ESP8266.

## Screen-Shots

<p>
<img src="https://user-images.githubusercontent.com/36808495/54416268-ed787500-4724-11e9-99d6-15eaace91a7a.gif">
<img src="https://user-images.githubusercontent.com/36808495/54416297-008b4500-4725-11e9-8e9f-a0349e67f17a.jpg" width="430">
<img src="https://user-images.githubusercontent.com/36808495/54416300-0123db80-4725-11e9-87c9-dada6f13fa86.jpg" width="430" height="320">
</p>

## ESP8266 Pin Configuration

<p>
<img src="https://user-images.githubusercontent.com/36808495/54416793-688e5b00-4726-11e9-8070-3411d53f4ea2.png">
</p>

## Usage

To use this template for your own personal site, you can follow steps given below:

1. Fork this repository.
2. Rename your fork to `YOURUSERNAME.github.io`.
3. Update `index.php` file with your information.

You also need to go to the *settings*, then *GitHub Pages* section and select *source* as master.

### Php Design

`Index.php` is the most important file in this project, as it is responsible for providing all the data. It is designed in a way the JS script could understand it. Right now, the file is already populated with sample data, but the following are the rules used:

**Function Change PHP File **

Every first level key is considered as a Function, while their value is considered as the data of that Function. For example, to create two sections, *Div* and *Html*, the following is how it will be done.

<div>
<font size="5" color="blue"> 

<p align =center> Use this link in your code to get data from the website. </p>
<p align =center > "Replace With your think speak Html file" </p>
<div>
<font size="2" color="red"> 
        <p>Designed By : </p>
        <p>Your Name Here</p>
        <p>Email : Your Email-id</p>
        
</div>

</font>
</div >

## Pre-Requisites

- C++ Lang
- Arduino IDE
- Sublime Text Editor
- jquery 
- Domain & Hosting
- Think Speak 

## Installing with Boards Manager

Starting with 1.6.4, Arduino allows installation of third-party platform packages using Boards Manager. We have packages available for Windows, Mac OS, and Linux (32 and 64 bit).

- Install the current upstream Arduino IDE at the 1.8.7 level or later. The current version is at the [Arduino website](http://www.arduino.cc/en/main/software).
- Start Arduino and open Preferences window.
- Enter ```http://arduino.esp8266.com/stable/package_esp8266com_index.json``` into *Additional Board Manager URLs* field. You can add multiple URLs, separating them with commas.
- Open Boards Manager from Tools > Board menu and install *esp8266* platform (and don't forget to select your ESP8266 board from Tools > Board menu after installation).

#### Latest release [![Latest release](https://img.shields.io/github/release/esp8266/Arduino.svg)](https://github.com/esp8266/Arduino/releases/latest/)
Boards manager link: `http://arduino.esp8266.com/stable/package_esp8266com_index.json`

Documentation: [https://arduino-esp8266.readthedocs.io/en/2.5.0/](https://arduino-esp8266.readthedocs.io/en/2.5.0/)

## Contribution

You can contribute to this project in multiple way. Here are some of them mentioned below

### Help in Development

This project can be improved so much more, with new features and design. If you
are willing and intrested, feel free to help develop it for yourself and others.  

### Report the issues and features

If you feel a feature is missing, or you have encounter a bug, report it in the
issues section. It will really help any one working on the development.

### Spread the words

Star this project, use it, or tell your friends about it. It will really help.

## Resources

- [Think Speak](https://thingspeak.com/)
- [Arduino](https://www.arduino.cc/)
- [Board Manager](https://github.com/esp8266/Arduino)

## License

GNU General Public License v3.0
