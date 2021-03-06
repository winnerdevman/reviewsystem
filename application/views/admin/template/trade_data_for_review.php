<?php foreach($trades as $item ){ ?>    
<tr>
    <td class="category_name">
        <?php echo $item->category_name ?>
    </td>
    <td class="trade_name">
        <?php echo $item->name ?>
    </td>
    <td class="company_name">
        <?php echo $item->company_name ?>
    </td>
    <td class="phonenumber">
        <?php echo $item->phonenumber ?>
    </td>
    <td class="website">
        <?php echo $item->website ?>
    </td>
    <td class="email">
        <?php echo $item->email ?>
    </td>
    <td class="note">
        <?php echo $item->note ?>
    </td>
    <td class="text-right">
        <?php if($item->avg_rate != "" && $item->avg_rate > 0 ){ ?>
        <div class="rating-div" value="<?php echo $item->avg_rate; ?>"></div> 
        <?php }else{ ?>
            <div class="rating-div" value="0"></div> 
        <?php } ?>
    </td>
    <td class="text-right">
        <a href="/admin/review/item/<?php echo $item->id;?>"
                class="btn btn-success btn-round btn-sm edit-btn">
            <i class="material-icons">edit</i>
        </a>
    </td>
</tr>
<?php } ?>