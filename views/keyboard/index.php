<?php use yii\helpers\Url; ?>
<a href="<?php echo Url::to(['keyboard/create'])?>" class="btn btn-primary">Add keyboard</a>
<table class="table table-active">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Type</th>
        <th>Country</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

<?php foreach ($model->listTitle() as $item): ?>
    <tr>
        <td><?php echo $item->id ?></td>
        <td><?php echo $item->title ?></td>
        <td><?php echo $item->type ?></td>
        <td><?php echo $item->country ?></td>
        <td><?php echo $item->price ?></td>
        <td><a href="<?php echo Url::to(['keyboard/update', 'id' => $item->id]);?>">Edit</a></td>
        <td><a href="<?php echo Url::to(['keyboard/delete', 'id' => $item->id]);?>">Delete</a></td>
    </tr>

<?php endforeach;?>

</table>
