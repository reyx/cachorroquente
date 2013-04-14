<h1>Blog posts</h1>

<? echo $this->Html->link(
    'Add Post',
    array('controller' => 'posts', 'action' => 'add')
); ?>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Action</th>
        <th>Created</th>
    </tr>

    <!-- iterate $posts array -->

    <? foreach ($posts as $post): ?>
    <tr>
        <td><? echo $post['Post']['id']; ?></td>
        <td>
            <? echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td>
            <? echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <? echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
        </td>
        <td><? echo $post['Post']['created']; ?></td>
    </tr>
    <? endforeach; ?>
    <? unset($post); ?>
</table>
