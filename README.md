# Redkiwi demo
 
## Installation
  First do a clone to this project
  
  ```
  git clone git@bitbucket.org:Danman1987/clifun.git
  ```
  
  If cloning is done run the following command in the folder
  
  ```
  composer install
  ```
  
  When installation is complete use the default values to going further to install Symfony.
  
## Usage
  
  When done use the following command for a default result.
  
  ```
  bin/console clifun:demo
  ```
  
  You can use some arguments, like this:
  
  ```
  bin/console clifun:demo eagle
  ```
  
  You can also use "hamster" as an argument. The default is kiwi.
  
  You also can use the option color to cheer things up:
  
  ```
  bin/console clifun:demo hamster --color=red
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