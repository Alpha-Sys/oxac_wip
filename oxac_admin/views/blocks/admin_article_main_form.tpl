[{$smarty.block.parent}]

<tr>
    <td class="edittext">
        [{oxmultilang ident="OXAC_NUMBER"}]
    </td>
    <td class="edittext">
        <input type="text" class="editinput" size="10" maxlength="[{$edit->oxarticles__oxacnumber->fldmax_length}]" name="editval[oxarticles__oxacnumber]" value="[{$edit->oxarticles__oxacnumber->value}]" [{$readonly}]>
    </td>
</tr>

<tr>
    <td class="edittext">
        [{oxmultilang ident="OXAC_INFO"}]
    </td>
    <td class="edittext">
        <input type="text" class="editinput" size="10" maxlength="[{$edit->oxarticles__oxacinfo->fldmax_length}]" name="editval[oxarticles__oxacinfo]" value="[{$edit->oxarticles__oxacinfo->value}]" [{$readonly}]>
    </td>
</tr>