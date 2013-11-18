
<form enctype="multipart/form-data" action="<?php echo SITE_URL ?>parsecsv" method="POST">
    <label>
        Upload CSV File
    </label>
    
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <input type="file" name="file" name="csv_file"/>
    
    <input type="submit" value="Analize File" />
    <br />
    
    
</form>
