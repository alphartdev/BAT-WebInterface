<form class="form-inline">
<h1 style="text-align: center;">
<span style="text-decoration: underline;">Watch list</span> - Sorted by
<select class="form-control selectSortBy">
	<option value="player" <?php if($this->getSortingColumn() == "player")
		echo"selected='selected'"; ?>>player</option>
	<option value="server" <?php if($this->getSortingColumn() == "server")
		echo"selected='selected'"; ?>>server</option>
	<option value="reason" <?php if($this->getSortingColumn() == "reason")
		echo"selected='selected'"; ?>>reason</option>
	<option value="staff" <?php if($this->getSortingColumn() == "staff")
		echo"selected='selected'"; ?>>staff</option>
	<option value="date" <?php if($this->getSortingColumn() == "date")
		echo"selected='selected'"; ?>>date</option>
	<option value="state" <?php if($this->getSortingColumn() == "state")
		echo"selected='selected'"; ?>>state</option>
	<option value="unwatch_date" <?php if($this->getSortingColumn() == "unwatch_date")
		echo"selected='selected'"; ?>>unwatch date</option>
	<option value="unwatch_staff" <?php if($this->getSortingColumn() == "unwatch_staff")
		echo"selected='selected'"; ?>>unwatch staff</option>
	<option value="unwatch_reason" <?php if($this->getSortingColumn() == "unwatch_reason")
		echo"selected='selected'"; ?>>unwatch reason</option>
</select>
</h1>
</form>
<table class="table table-bat">
	<thead>
		<tr>
			<th>Player</th>
			<th>Server</th>
			<th>Reason</th>
			<th>Staff</th>
			<th>Date</th>
			<th>State</th>
			<th>Unwatch date</th>
			<th>Unwatch staff</th>
			<th>Unwatch reason</th>
		</tr>
	</thead>
	<tbody>
	<?php
	if (empty($data)) {echo "<tr><td colspan='100'>There are no watchs.</td></tr>";}
	else{
	foreach ($data as $entry){
	$watch = $entry->getData();
	?>
		<tr class="<?php echo $watch['state'] ? "warning" : "info-bat";?>">
			<td ><?php 
			$contentToDisplay = ($watch['ipPunishment']) 
				? (($this->isAdmin()) ? $watch['player'] : Message::ipHidden)
				: $watch['headImg'] . $watch['player'];
			echo $contentToDisplay;
			?></td>
			<td><?php echo $watch['server'];?></td>
			<td><?php echo $watch['reason'];?></td>
			<td><?php echo $watch['staff'];?></td>
			<td><?php echo $watch['date'];?></td>
			<td class="<?php echo $watch['state'] ? "danger-bat" : "";?>"><?php echo $watch['state'] 
				? Message::state_ACTIVE : Message::state_ENDED;?></td>
			<td><?php echo $watch['unwatch_date'];?></td>
			<td><?php echo $watch['unwatch_staff'];?></td>
			<td><?php echo $watch['unwatch_reason'];?></td>
		</tr>
	<?php }}
	?>
</tbody>
</table>