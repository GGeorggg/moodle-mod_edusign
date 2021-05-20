<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'edusign', language 'en'
 *
 * @package   mod_edusign
 * @copyright 2012 NetSpot {@link http://www.netspot.com.au}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['activityoverview'] = 'You have edusignments that need attention';
$string['addsubmission'] = 'Add submission';
$string['addsubmission_help'] = 'You have not made a submission yet';
$string['addattempt'] = 'Allow another attempt';
$string['addnewattempt'] = 'Add a new attempt';
$string['addnewattempt_help'] = 'This will create a new blank submission for you to work on.';
$string['addnewattemptfromprevious'] = 'Add a new attempt based on previous submission';
$string['addnewattemptfromprevious_help'] = 'This will copy the contents of your previous submission to a new submission for you to work on.';
$string['addnewgroupoverride'] = 'Add group override';
$string['addnewuseroverride'] = 'Add user override';
$string['allocatedmarker'] = 'Allocated Marker';
$string['allocatedmarker_help'] = 'Marker allocated to this submission';
$string['allowsubmissions'] = 'Allow the user to continue making submissions to this edusignment.';
$string['allowsubmissionsshort'] = 'Allow submission changes';
$string['allowsubmissionsfromdate'] = 'Allow submissions from';
$string['allowsubmissionsfromdate_help'] = 'If enabled, students will not be able to submit before this date. If disabled, students will be able to start submitting right away.';
$string['allowsubmissionsfromdatesummary'] = 'This edusignment will accept submissions from <strong>{$a}</strong>';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'The edusignment details and submission form will be available from <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Always show description';
$string['alwaysshowdescription_help'] = 'If disabled, the edusignment Description above will only become visible to students at the "Allow submissions from" date.';
$string['applytoteam'] = 'Apply grades and feedback to entire group';
$string['edusign:addinstance'] = 'Add a new edusignment';
$string['edusign:exportownsubmission'] = 'Export own submission';
$string['edusign:editothersubmission'] = 'Edit another student\'s submission';
$string['edusign:grade'] = 'Grade edusignment';
$string['edusign:grantextension'] = 'Grant extension';
$string['edusign:manageallocations'] = 'Manage markers allocated to submissions';
$string['edusign:managegrades'] = 'Review and release grades';
$string['edusign:manageoverrides'] = 'Manage edusignment overrides';
$string['edusign:receivegradernotifications'] = 'Receive grader submission notifications';
$string['edusign:releasegrades'] = 'Release grades';
$string['edusign:revealidentities'] = 'Reveal student identities';
$string['edusign:reviewgrades'] = 'Review grades';
$string['edusign:viewblinddetails'] = 'View student identities when blind marking is enabled';
$string['edusign:viewsignings'] = 'View signings';
$string['edusign:submit'] = 'Submit edusignment';
$string['edusign:view'] = 'View edusignment';
$string['edusignfeedback'] = 'Feedback plugin';
$string['edusignfeedbackpluginname'] = 'Feedback plugin';
$string['edusignmentisdue'] = 'edusignment is due';
$string['edusignmentmail'] = '{$a->grader} has posted some feedback on your
edusignment submission for \'{$a->edusignment}\'

You can see it appended to your edusignment submission:

    {$a->url}';
$string['edusignmentmailhtml'] = '<p>{$a->grader} has posted some feedback on your
edusignment submission for \'<i>{$a->edusignment}</i>\'.</p>
<p>You can see it appended to your <a href="{$a->url}">edusignment submission</a>.</p>';
$string['edusignmentmailsmall'] = '{$a->grader} has posted some feedback on your
edusignment submission for \'{$a->edusignment}\' You can see it appended to your submission';
$string['edusignmentname'] = 'edusignment name';
$string['edusignmentplugins'] = 'edusignment plugins';
$string['edusignmentsperpage'] = 'edusignments per page';
$string['edusignsubmission'] = 'Submission plugin';
$string['edusignsubmissionpluginname'] = 'Submission plugin';
$string['attemptheading'] = 'Attempt {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Previous attempts';
$string['attemptnumber'] = 'Attempt number';
$string['attemptsettings'] = 'Attempt settings';
$string['attemptreopenmethod'] = 'Attempts reopened';
$string['attemptreopenmethod_help'] = 'Determines how student submission attempts are reopened. The available options are: <ul><li>Never - The student submission cannot be reopened.</li><li>Manually - The student submission can be reopened by a teacher.</li><li>Automatically until pass - The student submission is automatically reopened until the student achieves the grade to pass value set in the Gradebook (Gradebook setup section) for this edusignment.</li></ul>';
$string['attemptreopenmethod_manual'] = 'Manually';
$string['attemptreopenmethod_none'] = 'Never';
$string['attemptreopenmethod_untilpass'] = 'Automatically until pass';
$string['availability'] = 'Availability';
$string['backtoedusignment'] = 'Back to edusignment';
$string['batchoperationsdescription'] = 'With selected...';
$string['batchoperationconfirmlock'] = 'Lock all selected submissions?';
$string['batchoperationconfirmgrantextension'] = 'Grant an extension to all selected submissions?';
$string['batchoperationconfirmunlock'] = 'Unlock all selected submissions?';
$string['batchoperationconfirmreverttodraft'] = 'Revert selected submissions to draft?';
$string['batchoperationconfirmaddattempt'] = 'Allow another attempt for selected submissions?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'Set marking workflow state for all selected submissions?';
$string['batchoperationconfirmsetmarkingallocation'] = 'Set marking allocation for all selected submissions?';
$string['batchoperationconfirmdownloadselected'] = 'Download selected submissions?';
$string['batchoperationlock'] = 'lock submissions';
$string['batchoperationunlock'] = 'unlock submissions';
$string['batchoperationreverttodraft'] = 'revert submissions to draft';
$string['batchsetallocatedmarker'] = 'Set allocated marker for {$a} selected user(s).';
$string['batchsetmarkingworkflowstateforusers'] = 'Set marking workflow state for {$a} selected user(s).';
$string['blindmarking'] = 'Blind marking';
$string['blindmarkingenabledwarning'] = 'Blind marking is enabled for this activity.';
$string['blindmarking_help'] = 'Blind marking hides the identity of students from markers. Blind marking settings will be locked once a submission or grade has been made in relation to this edusignment.';
$string['calendardue'] = '{$a} is due';
$string['changeuser'] = 'Change user';
$string['changefilters'] = 'Change filters';
$string['choosegradingaction'] = 'Grading action';
$string['choosemarker'] = 'Choose...';
$string['chooseoperation'] = 'Choose operation';
$string['clickexpandreviewpanel'] = 'Click to expand review panel';
$string['collapsegradepanel'] = 'Collapse grade panel';
$string['collapsereviewpanel'] = 'Collapse review panel';
$string['comment'] = 'Comment';
$string['completionsubmit'] = 'Student must submit to this activity to complete it';
$string['conversionexception'] = 'Could not convert edusignment. Exception was: {$a}.';
$string['configshowrecentsubmissions'] = 'Everyone can see notifications of submissions in recent activity reports.';
$string['confirmsubmission'] = 'Are you sure you want to submit your work for grading? You will not be able to make any more changes.';
$string['confirmsubmissionheading'] = 'Confirm submission';
$string['confirmbatchgradingoperation'] = 'Are you sure you want to {$a->operation} for {$a->count} students?';
$string['couldnotconvertgrade'] = 'Could not convert edusignment grade for user {$a}.';
$string['couldnotconvertsubmission'] = 'Could not convert edusignment submission for user {$a}.';
$string['couldnotcreatecoursemodule'] = 'Could not create course module.';
$string['couldnotcreatenewedusignmentinstance'] = 'Could not create new edusignment instance.';
$string['couldnotfindedusignmenttoupgrade'] = 'Could not find old edusignment instance to upgrade.';
$string['currentgrade'] = 'Current grade in gradebook';
$string['currentattempt'] = 'This is attempt {$a}.';
$string['currentattemptof'] = 'This is attempt {$a->attemptnumber} ( {$a->maxattempts} attempts allowed ).';
$string['cutoffdate'] = 'Cut-off date';
$string['cutoffdatecolon'] = 'Cut-off date: {$a}';
$string['cutoffdate_help'] = 'If set, the edusignment will not accept submissions after this date without an extension.';
$string['cutoffdatevalidation'] = 'Cut-off date cannot be earlier than the due date.';
$string['cutoffdatefromdatevalidation'] = 'Cut-off date cannot be earlier than the allow submissions from date.';
$string['defaultlayout'] = 'Restore default layout';
$string['defaultsettings'] = 'Default edusignment settings';
$string['defaultsettings_help'] = 'These settings define the defaults for all new edusignments.';
$string['defaultteam'] = 'Default group';
$string['delete'] = 'Delete';
$string['deleteallsubmissions'] = 'Delete all submissions';
$string['description'] = 'Description';
$string['disabled'] = 'Disabled';
$string['downloadall'] = 'Download all submissions';
$string['download all submissions'] = 'Download all submissions in a zip file.';
$string['downloadasfolders'] = 'Download submissions in folders';
$string['downloadasfolders_help'] = 'edusignment submissions may be downloaded in folders. Each submission is then put in a separate folder, with the folder structure kept for any subfolders, and files are not renamed.';
$string['downloadselectedsubmissions'] = 'Download selected submissions';
$string['duedate'] = 'Due date';
$string['duedatecolon'] = 'Due date: {$a}';
$string['duedate_help'] = 'This is when the edusignment is due. Submissions will still be allowed after this date, but any edusignments submitted after this date will be marked as late. Set an edusignment cut-off date to prevent submissions after a certain date.';
$string['duedateno'] = 'No due date';
$string['duplicateoverride'] = 'Duplicate override';
$string['submissionempty'] = 'Nothing was submitted';
$string['submissionmodified'] = 'You have existing submission data. Please leave this page and try again.';
$string['submissionmodifiedgroup'] = 'The submission has been modified by somebody else. Please leave this page and try again.';
$string['duedatereached'] = 'The due date for this edusignment has now passed';
$string['duedatevalidation'] = 'Due date cannot be earlier than the allow submissions from date.';
$string['editattemptfeedback'] = 'Edit the grade and feedback for attempt number {$a}.';
$string['editonline'] = 'Edit online';
$string['editingpreviousfeedbackwarning'] = 'You are editing the feedback for a previous attempt. This is attempt {$a->attemptnumber} out of {$a->totalattempts}.';
$string['editoverride'] = 'Edit override';
$string['editsubmission'] = 'Edit submission';
$string['editsubmissionother'] = 'Edit submission for {$a}';
$string['editsubmission_help'] = 'You can still make changes to your submission';
$string['editingstatus'] = 'Editing status';
$string['editaction'] = 'Actions...';
$string['enabled'] = 'Enabled';
$string['eventallsubmissionsdownloaded'] = 'All the submissions are being downloaded.';
$string['eventassessablesubmitted'] = 'A submission has been submitted.';
$string['eventbatchsetmarkerallocationviewed'] = 'Batch set marker allocation viewed';
$string['eventbatchsetworkflowstateviewed'] = 'Batch set workflow state viewed.';
$string['eventextensiongranted'] = 'An extension has been granted.';
$string['eventfeedbackupdated'] = 'Feedback updated';
$string['eventfeedbackviewed'] = 'Feedback viewed';
$string['eventgradingformviewed'] = 'Grading form viewed';
$string['eventgradingtableviewed'] = 'Grading table viewed';
$string['eventidentitiesrevealed'] = 'The identities have been revealed.';
$string['eventmarkerupdated'] = 'The allocated marker has been updated.';
$string['eventoverridecreated'] = 'edusignment override created';
$string['eventoverridedeleted'] = 'edusignment override deleted';
$string['eventoverrideupdated'] = 'edusignment override updated';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Reveal identities confirmation page viewed.';
$string['eventstatementaccepted'] = 'The user has accepted the statement of the submission.';
$string['eventsubmissionconfirmationformviewed'] = 'Submission confirmation form viewed.';
$string['eventsubmissioncreated'] = 'Submission created.';
$string['eventsubmissionduplicated'] = 'The user duplicated their submission.';
$string['eventsubmissionformviewed'] = 'Submission form viewed.';
$string['eventsubmissiongraded'] = 'The submission has been graded.';
$string['eventsubmissionlocked'] = 'The submissions have been locked for a user.';
$string['eventsubmissionstatusupdated'] = 'The status of the submission has been updated.';
$string['eventsubmissionstatusviewed'] = 'The status of the submission has been viewed.';
$string['eventsubmissionunlocked'] = 'The submissions have been unlocked for a user.';
$string['eventsubmissionupdated'] = 'Submission updated.';
$string['eventsubmissionviewed'] = 'Submission viewed.';
$string['eventworkflowstateupdated'] = 'The state of the workflow has been updated.';
$string['expandreviewpanel'] = 'Expand review panel';
$string['extensionduedate'] = 'Extension due date';
$string['extensionnotafterduedate'] = 'Extension date must be after the due date';
$string['extensionnotafterfromdate'] = 'Extension date must be after the allow submissions from date';
$string['fixrescalednullgrades'] = 'This edusignment contains some erroneous grades. You can <a href="{$a->link}">automatically fix these grades</a>. This may affect course totals.';
$string['fixrescalednullgradesconfirm'] = 'Are you sure you want to fix erroneous grades? All affected grades will be removed. This may affect course totals.';
$string['fixrescalednullgradesdone'] = 'Grades fixed.';
$string['gradecanbechanged'] = 'Grade can be changed';
$string['gradersubmissionupdatedtext'] = '{$a->username} has updated their edusignment submission
for \'{$a->edusignment}\' at {$a->timeupdated}

It is available here:

    {$a->url}';
$string['gradersubmissionupdatedhtml'] = '{$a->username} has updated their edusignment submission
for <i>\'{$a->edusignment}\'  at {$a->timeupdated}</i><br /><br />
It is <a href="{$a->url}">available on the web site</a>.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} has updated their submission for edusignment {$a->edusignment}.';
$string['gradeuser'] = 'Grade {$a}';
$string['grantextension'] = 'Grant extension';
$string['grantextensionforusers'] = 'Grant extension for {$a} students';
$string['groupsubmissionsettings'] = 'Group submission settings';
$string['errornosubmissions'] = 'There are no submissions to download';
$string['errorquickgradingvsadvancedgrading'] = 'The grades were not saved because this edusignment is currently using advanced grading';
$string['errorrecordmodified'] = 'The grades were not saved because someone has modified one or more records more recently than when you loaded the page.';
$string['feedback'] = 'Feedback';
$string['feedbackavailabletext'] = '{$a->username} has posted some feedback on your
edusignment submission for \'{$a->edusignment}\'

You can see it appended to your edusignment submission:

    {$a->url}';
$string['feedbackavailablehtml'] = '{$a->username} has posted some feedback on your
edusignment submission for \'<i>{$a->edusignment}</i>\'<br /><br />
You can see it appended to your <a href="{$a->url}">edusignment submission</a>.';
$string['feedbackavailablesmall'] = '{$a->username} has given feedback for edusignment {$a->edusignment}';
$string['feedbackplugins'] = 'Feedback plugins';
$string['feedbackpluginforgradebook'] = 'Feedback plugin that will push comments to the gradebook';
$string['feedbackpluginforgradebook_help'] = 'Only one edusignment feedback plugin can push feedback into the gradebook.';
$string['feedbackplugin'] = 'Feedback plugin';
$string['feedbacksettings'] = 'Feedback settings';
$string['feedbacktypes'] = 'Feedback types';
$string['filesubmissions'] = 'File submissions';
$string['filter'] = 'Filter';
$string['filtergrantedextension'] = 'Granted extension';
$string['filternone'] = 'No filter';
$string['filternotsubmitted'] = 'Not submitted';
$string['filterrequiregrading'] = 'Requires grading';
$string['filtersubmitted'] = 'Submitted';
$string['graded'] = 'Graded';
$string['gradedby'] = 'Graded by';
$string['gradedon'] = 'Graded on';
$string['gradebelowzero'] = 'Grade must be greater than or equal to zero.';
$string['gradeabovemaximum'] = 'Grade must be less than or equal to {$a}.';
$string['gradelocked'] = 'This grade is locked or overridden in the gradebook.';
$string['gradeoutof'] = 'Grade out of {$a}';
$string['gradeoutofhelp'] = 'Grade';
$string['gradeoutofhelp_help'] = 'Enter the grade for the student\'s submission here. You may include decimals.';
$string['gradestudent'] = 'Grade student: (id={$a->id}, fullname={$a->fullname}). ';
$string['grading'] = 'Signings';
$string['gradingchangessaved'] = 'The grade changes were saved';
$string['gradechangessaveddetail'] = 'The changes to the grade and feedback were saved';
$string['gradingmethodpreview'] = 'Signing criteria';
$string['gradingoptions'] = 'Options';
$string['gradingstatus'] = 'Signing status';
$string['gradingstudent'] = 'Signing student';
$string['gradingsummary'] = 'Signing summary';
$string['groupoverrides'] = 'Group overrides';
$string['groupoverridesdeleted'] = 'Group overrides deleted';
$string['groupsnone'] = 'No groups you can access.';
$string['hideshow'] = 'Hide/Show';
$string['hiddenuser'] = 'Participant ';
$string['inactiveoverridehelp'] = '* Student does not have the correct group or role to attempt the edusignment';
$string['indicator:cognitivedepth'] = 'edusignment cognitive';
$string['indicator:cognitivedepth_help'] = 'This indicator is based on the cognitive depth reached by the student in an edusignment activity.';
$string['indicator:socialbreadth'] = 'edusignment social';
$string['indicator:socialbreadth_help'] = 'This indicator is based on the social breadth reached by the student in an edusignment activity.';
$string['instructionfiles'] = 'Instruction files';
$string['introattachments'] = 'Additional files';
$string['introattachments_help'] = 'Additional files for use in the edusignment, such as answer templates, may be added. Download links for the files will then be displayed on the edusignment page under the description.';
$string['invalidgradeforscale'] = 'The grade supplied was not valid for the current scale';
$string['invalidfloatforgrade'] = 'The grade provided could not be understood: {$a}';
$string['invalidoverrideid'] = 'Invalid override id';
$string['lastmodifiedsubmission'] = 'signed at';
$string['lastmodifiedgrade'] = 'Last modified (grade)';
$string['latesubmissions'] = 'Late submissions';
$string['latesubmissionsaccepted'] = 'Allowed until {$a}';
$string['loading'] = 'Loading...';
$string['locksubmissionforstudent'] = 'Prevent any more submissions for student: (id={$a->id}, fullname={$a->fullname}).';
$string['locksubmissions'] = 'Lock submissions';
$string['manageedusignfeedbackplugins'] = 'Manage edusignment feedback plugins';
$string['manageedusignsubmissionplugins'] = 'Manage edusignment submission plugins';
$string['marker'] = 'Marker';
$string['markerfilter'] = 'Marker filter';
$string['markerfilternomarker'] = 'No marker';
$string['markingallocation'] = 'Use marking allocation';
$string['markingallocation_help'] = 'If enabled together with marking workflow, markers can be allocated to particular students.';
$string['markingworkflow'] = 'Use marking workflow';
$string['markingworkflow_help'] = 'If enabled, marks will go through a series of workflow stages before being released to students. This allows for multiple rounds of marking and allows marks to be released to all students at the same time.';
$string['markingworkflowstate'] = 'Marking workflow state';
$string['markingworkflowstate_help'] = 'Possible workflow states may include (depending on your permissions):

* Not marked - the marker has not yet started
* In marking - the marker has started but not yet finished
* Marking completed - the marker has finished but might need to go back for checking/corrections
* In review - the marking is now with the teacher in charge for quality checking
* Ready for release - the teacher in charge is satisfied with the marking but wait before giving students access to the marking
* Released - the student can access the grades/feedback';
$string['markingworkflowstateinmarking'] = 'In marking';
$string['markingworkflowstateinreview'] = 'In review';
$string['markingworkflowstatenotmarked'] = 'Not marked';
$string['markingworkflowstatereadyforreview'] = 'Marking completed';
$string['markingworkflowstatereadyforrelease'] = 'Ready for release';
$string['markingworkflowstatereleased'] = 'Released';
$string['maxattempts'] = 'Maximum attempts';
$string['maxattempts_help'] = 'The maximum number of submission attempts that can be made by a student. After this number has been reached, the submission can no longer be reopened.';
$string['maxgrade'] = 'Maximum grade';
$string['maxgrade'] = 'Maximum Grade';
$string['maxperpage'] = 'Maximum edusignments per page';
$string['maxperpage_help'] = 'The maximum number of edusignments a grader can show in the edusignment grading page. Useful to prevent timeouts on courses with very large enrolments.';
$string['messageprovider:edusign_notification'] = 'edusignment notifications';
$string['modulename'] = 'edusignment';
$string['modulename_help'] = 'The edusignment activity module enables a teacher to communicate tasks, collect work and provide grades and feedback.

Students can submit any digital content (files), such as word-processed documents, spreadsheets, images, or audio and video clips. Alternatively, or in addition, the edusignment may require students to type text directly into the text editor. An edusignment can also be used to remind students of \'real-world\' edusignments they need to complete offline, such as art work, and thus not require any digital content. Students can submit work individually or as a member of a group.

When reviewing edusignments, teachers can leave feedback comments and upload files, such as marked-up student submissions, documents with comments or spoken audio feedback. edusignments can be graded using a numerical or custom scale or an advanced grading method such as a rubric. Final grades are recorded in the gradebook.';
$string['modulename_link'] = 'mod/edusignment/view';
$string['modulenameplural'] = 'edusignments';
$string['moreusers'] = '{$a} more...';
$string['multipleteams'] = 'Member of more than one group';
$string['multipleteams_desc'] = 'The edusignment requires submission in groups. You are a member of more than one group. To be able to submit you must be a member of only one group. Please contact your teacher to change your group membership.';
$string['multipleteamsgrader'] = 'Member of more than one group, so unable to make submissions.';
$string['mysubmission'] = 'My submission: ';
$string['newsubmissions'] = 'edusignments submitted';
$string['noattempt'] = 'No attempt';
$string['noclose'] = 'No close date';
$string['nofilters'] = 'No filters';
$string['nofiles'] = 'No files. ';
$string['nograde'] = 'No grade. ';
$string['nolatesubmissions'] = 'No late submissions accepted. ';
$string['nomoresubmissionsaccepted'] = 'Only allowed for participants who have been granted an extension';
$string['none'] = 'None';
$string['noonlinesubmissions'] = 'This edusignment does not require you to submit anything online';
$string['noopen'] = 'No open date';
$string['nooverridedata'] = 'You must override at least one of the edusignment settings.';
$string['nosavebutnext'] = 'Next';
$string['nosubmission'] = 'Nothing has been submitted for this edusignment';
$string['nosubmissionsacceptedafter'] = 'No submissions accepted after ';
$string['noteam'] = 'Not a member of any group';
$string['noteam_desc'] = 'This edusignment requires submission in groups. You are not a member of any group, so you cannot create a submission. Please contact your teacher to be added to a group.';
$string['noteamgrader'] = 'Not a member of any group, so unable to make submissions.';
$string['notgraded'] = 'Not graded';
$string['notgradedyet'] = 'Not graded yet';
$string['notsubmittedyet'] = 'Not submitted yet';
$string['notifications'] = 'Notifications';
$string['nousersselected'] = 'No users selected';
$string['nousers'] = 'No users';
$string['numberofdraftsubmissions'] = 'Drafts';
$string['numberofparticipants'] = 'Participants';
$string['numberofsubmittededusignments'] = 'Submitted';
$string['numberofsubmissionsneedgrading'] = 'Needs grading';
$string['numberofteams'] = 'Groups';
$string['offline'] = 'No online submissions required';
$string['open'] = 'Open';
$string['outof'] = '{$a->current} out of {$a->total}';
$string['overdue'] = '<font color="red">edusignment is overdue by: {$a}</font>';
$string['override'] = 'Override';
$string['overridedeletegroupsure'] = 'Are you sure you want to delete the override for group {$a}?';
$string['overridedeleteusersure'] = 'Are you sure you want to delete the override for user {$a}?';
$string['overridegroup'] = 'Override group';
$string['overridegroupeventname'] = '{$a->edusign} - {$a->group}';
$string['overrides'] = 'Overrides';
$string['overrideuser'] = 'Override user';
$string['overrideusereventname'] = '{$a->edusign} - Override';
$string['outlinegrade'] = 'Grade: {$a}';
$string['page-mod-edusign-x'] = 'Any edusignment module page';
$string['page-mod-edusign-view'] = 'edusignment module main and submission page';
$string['paramtimeremaining'] = '{$a} remaining';
$string['participant'] = 'Participant';
$string['pluginadministration'] = 'edusignment administration';
$string['pluginname'] = 'Edusignment';
$string['preventsubmissionnotingroup'] = 'Require group to make submission';
$string['preventsubmissionnotingroup_help'] = 'If enabled, users who are not members of a group will be unable to make submissions.';
$string['preventsubmissions'] = 'Prevent the user from making any more submissions to this edusignment.';
$string['preventsubmissionsshort'] = 'Prevent submission changes';
$string['previous'] = 'Previous';
$string['privacy:attemptpath'] = 'attempt {$a}';
$string['privacy:blindmarkingidentifier'] = 'The identifier used for blind marking';
$string['privacy:gradepath'] = 'grade';
$string['privacy:metadata:edusigndownloadasfolders'] = 'A user preference for whether multiple file submissions should be downloaded into folders';
$string['privacy:metadata:edusignfeedbackpluginsummary'] = 'Feedback data for the edusignment.';
$string['privacy:metadata:edusignfilter'] = 'Filter options such as \'Submitted\', \'Not submitted\', \'Requires grading\', and \'Granted extension\'';
$string['privacy:metadata:edusigngrades'] = 'Stores user grades for the edusignment';
$string['privacy:metadata:edusignmarkerfilter'] = 'Filter the edusign summary by the edusigned marker.';
$string['privacy:metadata:edusignmentid'] = 'edusignment ID';
$string['privacy:metadata:edusignmessageexplanation'] = 'Messages are sent to students through the messaging system.';
$string['privacy:metadata:edusignoverrides'] = 'Stores override information for the edusignment';
$string['privacy:metadata:edusignperpage'] = 'Number of edusignments shown per page.';
$string['privacy:metadata:edusignquickgrading'] = 'A preference as to whether quick grading is used or not.';
$string['privacy:metadata:edusignsubmissiondetail'] = 'Stores user submission information';
$string['privacy:metadata:edusignsubmissionpluginsummary'] = 'Submission data for the edusignment.';
$string['privacy:metadata:edusignuserflags'] = 'Stores user meta data such as extension dates';
$string['privacy:metadata:edusignusermapping'] = 'The mapping for blind marking';
$string['privacy:metadata:edusignworkflowfilter'] = 'Filter by the different workflow stages.';
$string['privacy:metadata:grade'] = 'The numerical grade for this edusignment submission. Can be determined by scales/advancedgradingforms etc but will always be converted back to a floating point number.';
$string['privacy:metadata:grader'] = 'The user ID of the person grading.';
$string['privacy:metadata:groupid'] = 'Group ID that the user is a member of.';
$string['privacy:metadata:latest'] = 'Greatly simplifies queries wanting to know information about only the latest attempt.';
$string['privacy:metadata:mailed'] = 'Has this user been mailed yet?';
$string['privacy:metadata:timecreated'] = 'Time created';
$string['privacy:metadata:userid'] = 'ID of the user';
$string['privacy:studentpath'] = 'studentsubmissions';
$string['quickgrading'] = 'Quick grading';
$string['quickgradingresult'] = 'Quick grading';
$string['quickgradingchangessaved'] = 'The grade changes were saved';
$string['quickgrading_help'] = 'Quick grading allows you to edusign grades (and outcomes) directly in the submissions table. Quick grading is not compatible with advanced grading and is not recommended when there are multiple markers.';
$string['removeallgroupoverrides'] = 'Delete all group overrides';
$string['removealluseroverrides'] = 'Delete all user overrides';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'Reopen until pass option is incompatible with blind marking, because the grades are not released to the gradebook until the student identities are revealed.';
$string['requiresubmissionstatement'] = 'Require that students accept the submission statement';
$string['requiresubmissionstatement_help'] = 'Require that students accept the submission statement for all submissions to this edusignment.';
$string['requireallteammemberssubmit'] = 'Require all group members submit';
$string['requireallteammemberssubmit_help'] = 'If enabled, all members of the student group must click the submit button for this edusignment before the group submission will be considered as submitted. If disabled, the group submission will be considered as submitted as soon as any member of the student group clicks the submit button.';
$string['recordid'] = 'Identifier';
$string['revealidentities'] = 'Reveal student identities';
$string['revealidentitiesconfirm'] = 'Are you sure you want to reveal student identities for this edusignment? This operation cannot be undone. Once the student identities have been revealed, the marks will be released to the gradebook.';
$string['reverttodefaults'] = 'Revert to edusignment defaults';
$string['reverttodraftforstudent'] = 'Revert submission to draft for student: (id={$a->id}, fullname={$a->fullname}).';
$string['reverttodraft'] = 'Revert the submission to draft status.';
$string['reverttodraftshort'] = 'Revert the submission to draft';
$string['reviewed'] = 'Reviewed';
$string['save'] = 'Save';
$string['saveallquickgradingchanges'] = 'Save all quick grading changes';
$string['saveandcontinue'] = 'Save and continue';
$string['savechanges'] = 'Save changes';
$string['savegradingresult'] = 'Grade';
$string['savenext'] = 'Save and show next';
$string['savingchanges'] = 'Saving changes...';
$string['saveoverrideandstay'] = 'Save and enter another override';
$string['scale'] = 'Scale';
$string['search:activity'] = 'edusignment - activity information';
$string['sendstudentnotificationsdefault'] = 'Default setting for "Notify students"';
$string['sendstudentnotificationsdefault_help'] = 'Set the default value for the "Notify students" checkbox on the grading form.';
$string['sendstudentnotifications'] = 'Notify students';
$string['sendstudentnotifications_help'] = 'If enabled, students receive a message about the updated grade or feedback.';
$string['sendnotifications'] = 'Notify graders about submissions';
$string['sendnotifications_help'] = 'If enabled, graders (usually teachers) receive a message whenever a student submits an edusignment, early, on time and late. Message methods are configurable.';
$string['selectlink'] = 'Select...';
$string['selectuser'] = 'Select {$a}';
$string['sendlatenotifications'] = 'Notify graders about late submissions';
$string['sendlatenotifications_help'] = 'If enabled, graders (usually teachers) receive a message whenever a student submits an edusignment late. Message methods are configurable.';
$string['sendsubmissionreceipts'] = 'Send submission receipt to students';
$string['sendsubmissionreceipts_help'] = 'This switch will enable submission receipts for students. Students will receive a notification every time they successfully submit an edusignment';
$string['setmarkingallocation'] = 'Set allocated marker';
$string['setmarkingworkflowstate'] = 'Set marking workflow state';
$string['selectedusers'] = 'Selected users';
$string['setmarkingworkflowstateforlog'] = 'Set marking workflow state : (id={$a->id}, fullname={$a->fullname}, state={$a->state}). ';
$string['setmarkerallocationforlog'] = 'Set marking allocation : (id={$a->id}, fullname={$a->fullname}, marker={$a->marker}). ';
$string['settings'] = 'edusignment settings';
$string['showrecentsubmissions'] = 'Show recent submissions';
$string['signings'] = 'Signings';
$string['status'] = 'Status';
$string['studentnotificationworkflowstateerror'] = 'Marking workflow state must be \'Released\' to notify students.';
$string['submissioncopiedtext'] = 'You have made a copy of your previous
edusignment submission for \'{$a->edusignment}\'

You can see the status of your edusignment submission:

    {$a->url}';
$string['submissioncopiedhtml'] = '<p>You have made a copy of your previous
edusignment submission for \'<i>{$a->edusignment}</i>\'.</p>
<p>You can see the status of your <a href="{$a->url}">edusignment submission</a>.</p>';
$string['submissioncopiedsmall'] = 'You have copied your previous edusignment submission for {$a->edusignment}';
$string['submissiondrafts'] = 'Require students to click the submit button';
$string['submissiondrafts_help'] = 'If enabled, students will have to click a Submit button to declare their submission as final. This allows students to keep a draft version of the submission on the system. If this setting is changed from "No" to "Yes" after students have already submitted those submissions will be regarded as final.';
$string['submissioneditable'] = 'Student can edit this submission';
$string['submissionlog'] = 'Student: {$a->fullname}, Status: {$a->status}';
$string['submissionnotcopiedinvalidstatus'] = 'The submission was not copied because it has been edited since it was reopened.';
$string['submissionnoteditable'] = 'Student cannot edit this submission';
$string['submissionnotready'] = 'This edusignment is not ready to submit:';
$string['privacy:submissionpath'] = 'submission';
$string['submissionplugins'] = 'Submission plugins';
$string['submissionreceipts'] = 'Send submission receipts';
$string['submissionreceiptothertext'] = 'Your edusignment submission for
\'{$a->edusignment}\' has been submitted.

You can see the status of your edusignment submission:

    {$a->url}';
$string['submissionreceiptotherhtml'] = 'Your edusignment submission for
\'<i>{$a->edusignment}</i>\' has been submitted.<br /><br />
You can see the status of your <a href="{$a->url}">edusignment submission</a>.';
$string['submissionreceiptothersmall'] = 'Your edusignment submission for {$a->edusignment} has been submitted.';
$string['submissionreceipttext'] = 'You have submitted an
edusignment submission for \'{$a->edusignment}\'

You can see the status of your edusignment submission:

    {$a->url}';
$string['submissionreceipthtml'] = '<p>You have submitted an edusignment submission for \'<i>{$a->edusignment}</i>\'.</p>
<p>You can see the status of your <a href="{$a->url}">edusignment submission</a>.</p>';
$string['submissionreceiptsmall'] = 'You have submitted your edusignment submission for {$a->edusignment}';
$string['submissionslocked'] = 'This edusignment is not accepting submissions';
$string['submissionslockedshort'] = 'Submission changes not allowed';
$string['submissions'] = 'Submissions';
$string['submissionsnotgraded'] = 'Submissions not graded: {$a}';
$string['submissionsclosed'] = 'Submissions closed';
$string['submissionsettings'] = 'Submission settings';
$string['submissionstatement'] = 'Submission statement';
$string['submissionstatement_help'] = 'edusignment submission confirmation statement';
$string['submissionstatementdefault'] = 'This edusignment is my own work, except where I have acknowledged the use of the works of other people.';
$string['submissionstatementacceptedlog'] = 'Submission statement accepted by user {$a}';
$string['submissionstatus_draft'] = 'Draft (not submitted)';
$string['submissionstatusheading'] = 'Signing status';
$string['submissionstatus_marked'] = 'Graded';
$string['submissionstatus_new'] = 'Not signed';
$string['submissionstatus_reopened'] = 'Reopened';
$string['submissionstatus_'] = 'Not signed';
$string['submissionstatus'] = 'Signing Status';
$string['submissionstatus_submitted'] = 'Signed';
$string['submissionsummary'] = '{$a->status}. Last modified on {$a->timemodified}';
$string['submissionteam'] = 'Group';
$string['submissiontypes'] = 'Submission types';
$string['submission'] = 'Submission';
$string['submitaction'] = 'Submit';
$string['submitforgrading'] = 'Submit for grading';
$string['submitedusignment_help'] = 'Once this edusignment is submitted you will not be able to make any more changes.';
$string['submitedusignment'] = 'Submit edusignment';
$string['submittedearly'] = 'edusignment was submitted {$a} early';
$string['submittedlate'] = 'edusignment was submitted {$a} late';
$string['submittedlateshort'] = '{$a} late';
$string['submitted'] = 'Submitted';
$string['subplugintype_edusignsubmission'] = 'Submission plugin';
$string['subplugintype_edusignsubmission_plural'] = 'Submission plugins';
$string['subplugintype_edusignfeedback'] = 'Feedback plugin';
$string['subplugintype_edusignfeedback_plural'] = 'Feedback plugins';
$string['teamname'] = 'Team: {$a}';
$string['teamsubmission'] = 'Students submit in groups';
$string['teamsubmission_help'] = 'If enabled students will be divided into groups based on the default set of groups or a custom grouping. A group submission will be shared among group members and all members of the group will see each others changes to the submission.';
$string['teamsubmissiongroupingid'] = 'Grouping for student groups';
$string['teamsubmissiongroupingid_help'] = 'This is the grouping that the edusignment will use to find groups for student groups. If not set - the default set of groups will be used.';
$string['textinstructions'] = 'edusignment instructions';
$string['timemodified'] = 'Last modified';
$string['timeremaining'] = 'Time remaining';
$string['timeremainingcolon'] = 'Time remaining: {$a}';
$string['togglezoom'] = 'Zoom in/out of region';
$string['ungroupedusers'] = 'The setting \'Require group to make submission\' is enabled and some users are either not a member of any group, or are a member of more than one group, so are unable to make submissions.';
$string['unlocksubmissionforstudent'] = 'Allow submissions for student: (id={$a->id}, fullname={$a->fullname}).';
$string['unlocksubmissions'] = 'Unlock submissions';
$string['unlimitedattempts'] = 'Unlimited';
$string['unlimitedattemptsallowed'] = 'Unlimited attempts allowed.';
$string['unlimitedpages'] = 'Unlimited';
$string['unsavedchanges'] = 'Unsaved changes';
$string['unsavedchangesquestion'] = 'There are unsaved changes to grades or feedback. Do you want to save the changes and continue?';
$string['updategrade'] = 'Update grade';
$string['updatetable'] = 'Save and update table';
$string['upgradenotimplemented'] = 'Upgrade not implemented in plugin ({$a->type} {$a->subtype})';
$string['userextensiondate'] = 'Extension granted until: {$a}';
$string['useridlistnotcached'] = 'The grade changes were NOT saved, as it was not possible to determine which submission they were for.';
$string['useroverrides'] = 'User overrides';
$string['useroverridesdeleted'] = 'User overrides deleted';
$string['usersnone'] = 'No students have access to this edusignment.';
$string['userswhoneedtosubmit'] = 'Users who need to submit: {$a}';
$string['usergrade'] = 'User grade';
$string['usersubmissioncannotberemoved'] = 'can t be removed';
$string['validmarkingworkflowstates'] = 'Valid marking workflow states';
$string['viewadifferentattempt'] = 'View a different attempt';
$string['viewbatchsetmarkingworkflowstate'] = 'View batch set marking workflow state page.';
$string['viewbatchmarkingallocation'] = 'View batch set marking allocation page.';
$string['viewfeedback'] = 'View feedback';
$string['viewfeedbackforuser'] = 'View feedback for user: {$a}';
$string['viewfullgradingpage'] = 'Open the full grading page to provide feedback';
$string['viewgradebook'] = 'View gradebook';
$string['viewgradingformforstudent'] = 'View grading page for student: (id={$a->id}, fullname={$a->fullname}).';
$string['viewgrading'] = 'View all submissions';
$string['viewownsubmissionform'] = 'View own submit edusignment page.';
$string['viewownsubmissionstatus'] = 'View own submission status page.';
$string['viewsubmissionforuser'] = 'View submission for user: {$a}';
$string['viewsubmission'] = 'View submission';
$string['viewfull'] = 'View full';
$string['viewsummary'] = 'View summary';
$string['viewsubmissiongradingtable'] = 'View submission grading table.';
$string['viewrevealidentitiesconfirm'] = 'View reveal student identities confirmation page.';
$string['workflowfilter'] = 'Workflow filter';
$string['xofy'] = '{$a->x} of {$a->y}';

// Deprecated since Moodle 3.2.
$string['changegradewarning'] = 'This edusignment has graded submissions and changing the grade will not automatically re-calculate existing submission grades. You must re-grade all existing submissions, if you wish to change the grade.';
$string['close'] = 'Close';
$string['delete'] = 'delete signing';
$string['delete:confirm'] = 'Do you really want to delete the signing?';
