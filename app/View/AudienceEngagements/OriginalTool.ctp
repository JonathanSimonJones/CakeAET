<!-- File: \app\View\Stickies\tool.ctp -->

<h1> Tool Page </h1>

<table>
	
	<tr>
        <th>Id</th>
        <th>Colour</th>
		<th>Body</th>
        <th>Username</th>
    </tr>
    <?php foreach ($stickies as $sticky): ?>
    <tr>
        <td><?php echo $sticky['AudienceEngagement']['id']; ?></td>
        <td><?php echo $sticky['AudienceEngagement']['colour']; ?></td>
		<td><?php echo $sticky['AudienceEngagement']['body']; ?></td>
        <td><?php echo $sticky['AudienceEngagement']['username']; ?></td>
    </tr>
    <?php endforeach; ?>
	<?php unset($post); ?>
</table>