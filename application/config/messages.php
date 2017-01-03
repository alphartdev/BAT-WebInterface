<?php
class Message{
const network = "Network"; // Name which will be displayed on most pages

// Messages : their use is explained in the comment on their right
const noReason = "No reason"; // When there are no reason associated to a punishment
const globalPunishment = "global"; // When the punishment server is the whole network
const noData = "<span class='glyphicon glyphicon-remove'></span>"; // Content to insert when there are no data, e.g when a ban is not over the unbandate is not set
const state_ACTIVE = "<span style='color: red;'>Active</span>"; // When a punishment is active
const state_ENDED = "<span style='color: #7AB317;'>Ended</span>"; // When a punisshment is ended
const commentTypeWarning = "<span style='color: #CC9E61; font-weight: bold;'>Warning</span>"; // When a comment's type is an warning
const commentTypeNote = "<span style='color: #80B3FF;'>Note</span>"; // When a comment's type is an note
const ipHidden = "IP address hidden";
}
?>