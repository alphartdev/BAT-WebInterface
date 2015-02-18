<form class="form-inline">
<h1 style="text-align: center;">
<span style="text-decoration: underline;">Mute list</span> - Sorted by
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
	<option value="unmute_date" <?php if($this->getSortingColumn() == "unmute_date")
		echo"selected='selected'"; ?>>unmute date</option>
	<option value="unmute_staff" <?php if($this->getSortingColumn() == "unmute_staff")
		echo"selected='selected'"; ?>>unmute staff</option>
	<option value="unmute_reason" <?php if($this->getSortingColumn() == "unmute_reason")
		echo"selected='selected'"; ?>>unmute reason</option>
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
			<th>Unmute date</th>
			<th>Unmute staff</th>
			<th>Unmute reason</th>
		</tr>
	</thead>
	<tbody>
	<?php
	if (empty($data)) {echo "<tr><td colspan='100'>There are no mutes.</td></tr>";}
	else{
	foreach ($data as $entry){
	$mute = $entry->getData();
	?>
		<tr class="<?php echo $mute['state'] ? "warning" : "info-bat";?>">
			<td ><?php 
			$contentToDisplay = ($mute['ipPunishment']) 
				? (($this->isAdmin()) ? $mute['player'] : Message::ipHidden)
				: $mute['headImg'] . $mute['player'];
			echo $contentToDisplay;
			?></td>
			<td><?php echo $mute['server'];?></td>
			<td><?php echo $mute['reason'];?></td>
			<td><?php echo $mute['staff'];?></td>
			<td><?php echo $mute['date'];?></td>
			<td class="<?php echo $mute['state'] ? "danger-bat" : "";?>"><?php echo $mute['state'] 
				? Message::state_ACTIVE : Message::state_ENDED;?></td>
			<td><?php echo $mute['unmute_date'];?></td>
			<td><?php echo $mute['unmute_staff'];?></td>
			<td><?php echo $mute['unmute_reason'];?></td>
		</tr>
	<?php }}
	?>
</tbody>
</table>