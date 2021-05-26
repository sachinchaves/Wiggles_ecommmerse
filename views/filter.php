<form method="post" action="index.php?controller=pages&action=filter">
            <select name="sizeId">
            <option value="">Make a selection</option>
                <?php
                $_POST["sizeId"] = (isset($_POST["sizeId"])) ? $_POST["sizeId"] : "";
                $animalTypeOptions = DB::fetchAll("SELECT * FROM product_sizes");
                ProductModel::buildDropDown($animalTypeOptions, $_POST["sizeId"]);
                ?>
            </select>
            <input type="submit" value="Filter"/>
        </form>