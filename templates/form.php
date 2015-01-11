<form id="im-form">
    <label for="inmember"><?= (array_key_exists('label', $atts) and $atts['label'] != '') ? $atts['label'] : 'Password: '; ?></label>
    <input type="text" id="in-input-code" name="inmember" />
    <input type="submit" name="submit" value="send"/>
    <p id="im-error" style="display: none;color: red; font-size: 70%">Error code!</p>
</form>


