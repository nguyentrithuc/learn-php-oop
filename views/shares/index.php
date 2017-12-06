<div>
    <a class="btn btn-primary" href="">Share Now</a>
    <?php foreach($viewModel as $item) { ?>
        <div class="well">
            <h3><?php echo $item['title']; ?></h3>
            <small><?php echo $item['create_date'];?></small>
            <hr>
            <p><?php echo $item['body']; ?></p>
        </div>
    <?php } ?>
</div>