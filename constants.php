<?php

define('APPLICATION_NAME', 'lecteur');
define('APPLICATION_URL', 'lecteur');
define('LOG_FILE_NAME', 'lecteur');
define('APPLICATION_VERSION', '3.0.0');
// define('URL_APPLICATION', 'http://localhost/lecteur');
define('ABSOLUTE_PATH', '/lecteur/');


DEFINE('ENCODING_STATE_WAITING', 1);
DEFINE('ENCODING_STATE_RUNNING', 2);
DEFINE('ENCODING_STATE_ENDED_WITH_ERRORS', 5);
DEFINE('ENCODING_STATE_ENDED_OK', 6);


DEFINE('PATH_RAW_FILE', 'ressources/raw_videos');
DEFINE('PATH_RAW_FILE_BIN', 'ressources/raw_videos_bin');
DEFINE('PATH_CONVERTED_FILE', 'ressources/video_traitees');
DEFINE('PATH_FFMPEG', 'ressources/ffmpeg.exe');
DEFINE('PATH_THUMBNAIL', 'ressources/thumbnails');
DEFINE('PATH_THUMBNAIL_FILE', 'ressources/stats_thumbnails.txt');
DEFINE('NB_THUMBNAIL_ERRORS', 20);
DEFINE('PATH_LOG_FOLDER', 'logs');

DEFINE('VIDEO_PAGINATION_DEFAULT', 10);
DEFINE('VIDEO_PAGINATION_NB', '10, 30, 50, -1');
DEFINE('VIDEO_PAGINATION_STRING', '10, 30, 50, "Tous"');

DEFINE('VIDEO_TYPE_COURS', 'COURS');
DEFINE('VIDEO_TYPE_STAGE', 'STAGE');
DEFINE('VIDEO_TYPE_FORMATION', 'FORMATION');
DEFINE('VIDEO_TYPE_SHOW', 'SHOW');
DEFINE('VIDEO_TYPE_ROUTINE', 'ROUTINE');
DEFINE('VIDEO_TYPE_LIBRE', 'LIBRE');
DEFINE('VIDEO_TYPE_INTERNET_TIPS', 'IE_TIPS');
DEFINE('VIDEO_TYPE_INTERNET_SHOWS', 'IE_SHOWS');

$VIDEO_TYPES = array(
		VIDEO_TYPE_COURS => 'Cours',
		VIDEO_TYPE_STAGE => 'Stage',
		VIDEO_TYPE_FORMATION => 'Formation',
		VIDEO_TYPE_SHOW => 'Show',
		VIDEO_TYPE_ROUTINE => 'Routine',
		VIDEO_TYPE_LIBRE => 'Libre',
		VIDEO_TYPE_INTERNET_TIPS => 'Internet - Tips',
		VIDEO_TYPE_INTERNET_SHOWS => 'Internet - Shows' );

DEFINE('NIVEAU_INITIATION', '10_INITIATION');
DEFINE('NIVEAU_DEBUTANT', '20_DEBUTANT');
DEFINE('NIVEAU_INTER', '30_INTER');
DEFINE('NIVEAU_INTER_PLUS', '40_INTER_PLUS');
DEFINE('NIVEAU_AVANCE', '50_AVANCE');
DEFINE('NIVEAU_COMPETITION', '60_COMPETITION');

$NIVEAUX = array(
		NIVEAU_INITIATION => 'Initiation',
		NIVEAU_DEBUTANT => 'Débutant',
		NIVEAU_INTER => 'Inter',
		NIVEAU_INTER_PLUS => 'Inter+',
		NIVEAU_AVANCE => 'Avancé',
		NIVEAU_COMPETITION => 'Compétition');


DEFINE('DROIT_CONSULT', 'CONSULT');
DEFINE('DROIT_UPLOAD', 'UPLOAD');
DEFINE('DROIT_EDIT_VIDEO', 'EDIT_VIDEO');
DEFINE('DROIT_ADMIN', 'ADMIN');
DEFINE('DROIT_PLAY_VIDEO', 'PLAY_VIDEO');
DEFINE('DROIT_CAN_BOOKMARK', 'CAN_BOOKMARK');
DEFINE('DROIT_CONSULT_PARTAGE', 'CONSULT_PARTAGE');
DEFINE('DROIT_ACTION_ALLOW_USER', 'ACTION_ALLOW_USER');
DEFINE('DROIT_ACTION_ALLOW_PROFILE', 'ACTION_ALLOW_PROFILE');
DEFINE('DROIT_ACTION_AFFECT_TAG', 'ACTION_AFFECT_TAG');
DEFINE('DROIT_ACTION_USE_PLAYLIST', 'ACTION_USE_PLAYLIST');
DEFINE('DROIT_MANAGE_PLAYLIST', 'MANAGE_PLAYLIST');
DEFINE('DROIT_LOG_AS', 'LOG_AS');


$DROIT_ACTION = array(DROIT_ACTION_ALLOW_USER, 
	DROIT_ACTION_ALLOW_PROFILE, 
	DROIT_ACTION_AFFECT_TAG,
	DROIT_ACTION_USE_PLAYLIST);


DEFINE('DEFAULT_EVENT_COLOR_ID', -1);
DEFINE('DEFAULT_EVENT_COLOR_LIBELLE', "Default color");
DEFINE('DEFAULT_EVENT_COLOR_CSS', 'accordeon-blue');

DEFINE('NO_EVENT_VIDEO_ID', -1);


$ALL_THEMES = array(
	1 => array( "nom" => "Thème bleu" ),
	2 => array( "nom" => "Thème vert" )
);
$THEME_1 = '<link rel="shortcut icon" HREF="'.APPLICATION_ABSOLUTE_URL.'style/images/icone.png">';
$THEME_2 = '<link rel="shortcut icon" HREF="'.APPLICATION_ABSOLUTE_URL.'style/nouveau_theme/images/icone.png">'.
			'<link rel="stylesheet" href="'.APPLICATION_ABSOLUTE_URL.'style/nouveau_theme/style_wood.css" />'.
			'<link rel="text/javascript" href="'.APPLICATION_ABSOLUTE_URL.'js/nouveau_theme.js" />';




/* ******************************************
 * *************** PARAMETRES ***************
 * ****************************************** */
DEFINE('PARAM_CONTEXT_LOG', 'LOG');
DEFINE('PARAM_ID_LOG_DEFAULT_LEVEL', 'LOG_DEFAULT_LEVEL');

if (session_status() != PHP_SESSION_NONE && isset($_SESSION['userId'])) {
	DEFINE('CONNECTED_USER_ID', $_SESSION['userId']);
	// $CONNECTED_USER_ID = $_SESSION['userId'];
}

?>