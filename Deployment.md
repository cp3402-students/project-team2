## Local Theme Development
- To access the theme file for the website, clone the `starter_theme` from the [GitHub repo](https://github.com/cp3402-students/project-team2) to your local development environment themes folder  
```
.../<local site>/pubic_html/wp_content/themes
```
- Open the `starter_theme` folder in your IDE of choice that supports PHP coding (Good choices would be PHP Storm or VS Code)
- Our team uses the 'work in the browser' method for CSS coding. Test new changes to the website using the 'inspect element' feature of your web browser, then copy those changes to your local CSS files
## Pushing Files to Staging Server
### Posts, Pages Media
1. From the WordPress dashboard on your **local environment** navigate to *tools > export*. Select 'all content' then click 'Download Export File', save file in an appropriate location
2. On the **staging server** navigate to *tools > import*. Select 'Run Importer' for the WordPress importer
3. Upload the file that you downloaded in step 1 and import
4. If you used any media in the posts / pages you just uploaded, ensure to upload the same files to the staging server media library
5. Check all content you just uploaded on the front end of the website to ensure there were no issues with the import 
### Theme 
1. Push changes made to theme to [GitHub repo](https://github.com/cp3402-students/project-team2) 
2. From the WordPress dashboard on your **local environment** navigate to *All-in-One WP Migration > Export*
3. Click 'advanced options' and tick every checkbox except for 'Do not export themes (files)'
4. Click *EXPORT TO > FILE*, save file in an appropriate location
5. On the **staging server** navigate to *All-in-One WP Migration > Backups*
6. Click *CREATE BACKUP* and wait for it to finish (You don't need to download the file)
7. On the **staging server** navigate to *All-in-One WP Migration > Import*
8. Select *IMPORT FROM > FILE*, select export file you saved in step 4. Accept prompts to finish import
9. Check front end of website to ensure there were no issues with the import 
## Push Staging Server To Live
1. On the **staging server** navigate to *All-in-One WP Migration > Export*
2. Click *EXPORT TO > FILE*, save file in an appropriate location
3. On the **live server** navigate to *All-in-One WP Migration > Backups*
4. Click *CREATE BACKUP* and wait for it to finish (You don't need to download the file)
5. Navigate to *All-in-One WP Migration > Import*
6. Select *IMPORT FROM > FILE*, select export file you saved in step 2. Accept prompts to finish import
7. Check front end of website to ensure there were no issues with the import 
