#
# $Id: schema_data.sql $
#

# POSTGRES BEGIN #

# -- Config
INSERT INTO phpbb_tracker_config (config_name, config_value) VALUES ('attachment_path', 'files/tracker');
INSERT INTO phpbb_tracker_config (config_name, config_value) VALUES ('send_email', '1');
INSERT INTO phpbb_tracker_config (config_name, config_value) VALUES ('tickets_per_page', '10');
INSERT INTO phpbb_tracker_config (config_name, config_value) VALUES ('posts_per_page', '10');
INSERT INTO phpbb_tracker_config (config_name, config_value) VALUES ('top_reporters', '10');
INSERT INTO phpbb_tracker_config (config_name, config_value) VALUES ('project_view', '0');
INSERT INTO phpbb_tracker_config (config_name, config_value) VALUES ('version', '0.2.0');

# POSTGRES COMMIT #