## Installation

1. Clone this repository:
    ```shell
    git clone https://github.com/ArdeaHN/enkripsi_password-xlsx.git

    ```
2. Open this project in your text editor (ex: `Visual Studio Code`).

3. Create a new `.xlxs` file and add the password data to be encrypted
    
4. Enable GD and Zip Extensions:
   - Open the php.ini file with a text editor.
   - Find the lines containing ;extension=gd and ;extension=zip, and remove the semicolons (;) at the beginning of these lines to enable the extensions.
   - The modified lines should look like this:
     ```shell
       extension=gd
       extension=zip
     ```
5. Save Changes and Restart XAMPP:
   - Save the php.ini file after making the changes.
   - Restart Apache using the XAMPP Control Panel to apply the changes
6. Run the Script:
   ```shell
   php encrypt_data_from_excel.php
   ```
