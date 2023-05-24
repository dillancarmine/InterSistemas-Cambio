<tr id="contador-<?php print $prodId ?>" class="contador-container">
    <td class="d-flex justify-content-start align-items-center"><img src="img/product-1.jpg" alt="<?php echo $name; ?>" class="mr-3" style="width: 50px;"><?php echo $name; ?></td>
    <td class="align-middle"><?php echo $price; ?></td>
    <td class="align-middle">
        <div class="input-group quantity mx-auto" style="width: 100px;">
            <div class="input-group-btn">
                <button id="restar" class="btn btn-sm btn-primary btn-minus">
                    <i class="fa fa-minus"></i>
                </button>
            </div>
            <input id="contador" type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="<?php echo isset($_POST['contador']) ? $_POST['contador'] : 0; ?>">
            <div class="input-group-btn">
                <button id="sumar" class="btn btn-sm btn-primary btn-plus">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
        </div>
    </td>
    <td class="align-middle"><?php echo $price; ?></td>
    <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
</tr>