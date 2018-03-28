# Redkiwi demo

A Symfony 3.0.0 project created on December 1, 2015, 4:16 pm.

## Used references
 - http://symfony.com/doc/current/cookbook/console/console_command.html
 - http://climate.thephpleague.com/
 - http://www.retrojunkie.com/asciiart/animals/hamsters.htm
 - http://www.retrojunkie.com/asciiart/animals/eagles.htm
 - http://www.retrojunkie.com/asciiart/holidays/xmas.htm
 
## Installation
  First do a clone to this project
  
  ```
  git clone git@bitbucket.org:Danman1987/connect-holland.git
  ```
  
  If cloning is done run the following command in the folder
  
  ```
  composer install
  ```
  
  When installation is complete use the default values to going further to install Symfony.
  
## Usage
  
  When done use the following command for a default result.
  
  ```
  bin/console ch:demo
  ```
  
  You can use some arguments, like this:
  
  ```
  bin/console ch:demo eagle
  ```
  
  You can also use "christmas" as an argument. The default is hamster.
  
  You also can use the option color to cheer things up:
  
  ```
  bin/console ch:demo christmas --color=red
  ```
  
  These are the colors you can choose from:
  
 - Black
 - Red
 - Green
 - Yellow
 - Blue
 - Magenta
 - Cyan
 - Light Gray: Note as lightGray
 - Dark Gray: Note as darkGray
 - Light Red: Note as lightRed
 - Light Green: Note as lightGreen
 - Light Yellow: Note as lightYellow
 - Light Blue: Note as lightBlue
 - Light Magenta: Note as lightMagenta
 - Light Cyan: Note as lightCyan
 - White