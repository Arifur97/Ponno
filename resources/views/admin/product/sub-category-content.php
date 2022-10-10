<label for="inputEmail3" class="col-sm-4 control-label">Sub Category Name</label>
<div class="col-sm-8">
    <select name="sub_category_id" class="form-control">
        <?php foreach ($subCategoriesByCategoryId as $subCategoryByCategoryId) { ?>
            <option value="<?php echo $subCategoryByCategoryId->id; ?>"><?php echo $subCategoryByCategoryId->sub_category_name; ?></option>
        <?php } ?>
    </select>
</div>