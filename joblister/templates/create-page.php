
<?php include_once 'default/nav.php';?>

<form action="" method="post" class="form-control">
    <!-- PREVENT PRESS ENTER TO SUBMIT -->
    <button type="submit" disabled style="display: none" aria-hidden="true"></button>


    <h3 class="page-header p-3">
        <?php echo $title;?>
    </h3>
    <div class="container">
        <!--COMPANY-->
        <div class="form-group pt-2">
            <label class="pb-1">Company: </label>
            <input type="text" class="form-control" name="company">
        </div>
        <!-- CATEGORY -->
        <div class="form-group pt-2">
            <label class="pb-1">Category: </label>
            <select class="form-select" name="category">
                <option value="0">Choose Category</option>
                <?php foreach ($category_id as $category):?>
                    <option value="<?php echo $category->id;?>">
                        <?php echo $category->name;?>
                    </option>
                <?php endforeach?>
            </select>
        </div>
        <!--JOB TITLE -->
        <div class="form-group pt-2">
            <label class="pb-1">Job Title: </label>
            <input type="text" class="form-control" name="job_title">
        </div>
        <!-- DESCRIPTION -->
        <div class="form-group pt-2">
            <label class="pb-1">Description: </label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <!-- LOCATION -->
        <div class="form-group pt-2">
            <label class="pb-1">Location: </label>
            <input type="text" class="form-control" name="location">
        </div>
        <!-- SALARY -->
        <div class="form-group pt-2">
            <label class="pb-1">Salary: </label>
            <input type="text" class="form-control" name="salary">
        </div>
        <!-- CONTACT USER -->
        <div class="form-group pt-2">
            <label class="pb-1">Contact User: </label>
            <input type="text" class="form-control" name="contact_user">
        </div>
        <!-- CONTACT EMAIL -->
        <div class="form-group pt-2">
            <label class="pb-1">Contact Email: </label>
            <input type="text" class="form-control" name="contact_email">
        </div>
        
        <br>
        <input type="submit" class="btn btn-secondary" value="Submit" name="submit">
        <p></p>
        
    </div>
</form>

<?php include_once 'default/footer.php';?>

