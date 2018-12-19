# Data Matrix Generator

Generate a .zip archive with datamatrix inside generated from a .csv file

## Usage

````
php generate.php [OPTION]
-f    specify the file to use, ex : barcodes.csv
-c    specify the column in the file to use, ex : A
-o    specify the path and name of the file to use, ex: barcodes.zip
-t    specify the type of type of barcode to use. Can be one of [coming soon]
````

## TODO

* [ ] Supports parameters from command line
* [ ] Have multiple parameters avaiable :
    * [ ] -f for the input .csv file
    * [ ] -c for the column to use in the csv file
    * [ ] -o for the zip
    * [ ] -t for the type of barcode to use can be one of the following
        * [ ] datamatrix
        * [ ] barcode
        * [ ] QR Code