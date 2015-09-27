<h5>Formulär för att lägga till kommentar</h5>
<hr />
<form method=post>
    <input type=hidden name="redirect" value="<?=$this->url->create('comment')?>">
    <div class="row">
        <div class="four columns">
            <label for="name">Name:</label>
            <input class="u-full-width" type="text" placeholder="Test Testsson" id="name" value='<?=$name?>'>
        </div>
        <div class="four columns">
            <label for="web">Homepage:</label>
            <input class="u-full-width" type="text" placeholder="www.webpage.com" id="web" value='<?=$web?>'>
        </div>
        <div class="four columns">
            <label for="mail">Mail:</label>
            <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="mail" name="mail" value='<?=$mail?>'>
        </div>
    </div>
    <div class="row">
        <label for="content">Comment</label>
        <textarea class="u-full-width" placeholder="Write your awsome comment here..." id="content" name="content"><?=$content?></textarea>
    </div>
    <p class=buttons>
        <input type='submit' name='doCreate' value='Spara' onClick="this.form.action = '<?=$this->url->create('comment/add')?>'"/>
        <input type='reset' name='doReset' value='Återställ' />
        <input type='submit' name='doRemoveAll' value='Ta bort alla' onClick="this.form.action = '<?=$this->url->create('comment/remove-all')?>'"/>
    </p>
    <output><?=$output?></output>
</form>