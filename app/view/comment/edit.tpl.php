<h5>Uppdatera kommentar</h5>
    <form method=post>
        <input type=hidden name="redirect" value="<?=  $this->url->create("comment")?>">
        <input type=hidden name="redirect" value="<?=$key == 'key2' ? $this->url->create('comment2') : $this->url->create('comment')?>">


        <input type=hidden name="key" value="<?=$key?>">
        <div class="row">
            <div class="four columns">
                <label for="name">Name:</label>
                <input class="u-full-width" type="text" name="name" placeholder="Test Testsson" id="name" value='<?=$comment['name']?>'>
            </div>
            <div class="four columns">
                <label for="web">Homepage:</label>
                <input class="u-full-width" type="text" name="web" placeholder="www.webpage.com" id="web" value='<?=$comment['web']?>'>
            </div>
            <div class="four columns">
                <label for="mail">Mail:</label>
                <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="mail" name="mail" value='<?=$comment['mail']?>'>
            </div>
        </div>
        <div class="row">
            <label for="content">Comment</label>
            <textarea class="u-full-width" placeholder="Write your awsome comment here..." id="content" name="content"><?=strip_tags($comment['content'])?></textarea>
        </div>
        <input type='submit' name='doEdit' value='Uppdatera' onClick="this.form.action = '<?=$this->url->create("comment/edit/$id")?>'"/>
        <input type='submit' name='delete' value='Radera kommentar'
               onClick="this.form.action = '<?=$this->url->create("comment/delete/$id")?>'"/>
        <input type='reset' value='Återställ'/>
        <a class="button" href="<?=$this->url->create("comment")?>">Avbryt</a>

        <output><?=$output?></output>
    </form>
