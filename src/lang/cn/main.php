<?php
/*
	*********************************************************************
	* LogAnalyzer - http://loganalyzer.adiscon.com
	* -----------------------------------------------------------------
	*
	* Copyright (C) 2008-2010 Adiscon GmbH.
	*
	* This file is part of LogAnalyzer.
	*
	* LogAnalyzer is free software: you can redistribute it and/or modify
	* it under the terms of the GNU General Public License as published by
	* the Free Software Foundation, either version 3 of the License, or
	* (at your option) any later version.
	*
	* LogAnalyzer is distributed in the hope that it will be useful,
	* but WITHOUT ANY WARRANTY; without even the implied warranty of
	* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	* GNU General Public License for more details.
	*
	* You should have received a copy of the GNU General Public License
	* along with LogAnalyzer. If not, see <http://www.gnu.org/licenses/>.
	*
	* A copy of the GPL can be found in the file "COPYING" in this
	* distribution.
	*********************************************************************
*/
global $content;

// Global Stuff
$content['LN_MAINTITLE'] = "主要分析器";
$content['LN_MAIN_SELECTSTYLE'] = "选择样式";
$content['LN_GEN_LANGUAGE'] = "选择语言";
$content['LN_GEN_SELECTSOURCE'] = "选择来源";
$content['LN_GEN_MOREPAGES'] = "More than one Page available";
$content['LN_GEN_FIRSTPAGE'] = "第一页";
$content['LN_GEN_LASTPAGE'] = "最后页";
$content['LN_GEN_NEXTPAGE'] = "下一页";
$content['LN_GEN_PREVIOUSPAGE'] = "上一页";
$content['LN_GEN_RECORDCOUNT'] = "总记录";
$content['LN_GEN_PAGERSIZE'] = "每页记录";
$content['LN_GEN_PAGE'] = "页";
$content['LN_GEN_PREDEFINEDSEARCHES'] = "预定义搜索";
$content['LN_GEN_SOURCE_DISK'] = "磁盘文件";
$content['LN_GEN_SOURCE_DB'] = "原生MYSQL";
$content['LN_GEN_SOURCE_PDO'] = "数据库 (PDO)";
$content['LN_GEN_SOURCE_MONGODB'] = "原生MongoDB";
$content['LN_GEN_RECORDSPERPAGE'] = "条/页";
$content['LN_GEN_PRECONFIGURED'] = "预配置";
$content['LN_GEN_AVAILABLESEARCHES'] = "可用搜索";
$content['LN_GEN_DB_MYSQL'] = "Mysql服务器";
$content['LN_GEN_DB_MSSQL'] = "Microsoft SQL Server";
$content['LN_GEN_DB_ODBC'] = "ODBC Database Source";
$content['LN_GEN_DB_PGSQL'] = "PostgreSQL";
$content['LN_GEN_DB_OCI'] = "Oracle Call Interface";
$content['LN_GEN_DB_DB2'] = "	IBM DB2";
$content['LN_GEN_DB_FIREBIRD'] = "Firebird/Interbase 6";
$content['LN_GEN_DB_INFORMIX'] = "IBM Informix Dynamic Server";
$content['LN_GEN_DB_SQLITE'] = "SQLite 2";
$content['LN_GEN_SELECTVIEW'] = "选择视图";
$content['LN_GEN_CRITERROR_UNKNOWNTYPE'] = "The source type '%1' is not supported by LogAnalyzer yet. This is a critical error, please fix your configuration.";
$content['LN_GEN_ERRORRETURNPREV'] = "点击这里返回上一页.";
$content['LN_GEN_ERRORDETAILS'] = "错误详细:";
$content['LN_SOURCES_ERROR_WITHINSOURCE'] = "The source '%1' checking returned with an error:<br>%2";
$content['LN_SOURCES_ERROR_EXTRAMSG'] = "Extra Error Details:<br>%1";
$content['LN_ERROR_NORECORDS'] = "没有发现记录";
$content['LN_ERROR_FILE_NOT_FOUND'] = "Syslog 文件找不到";
$content['LN_ERROR_FILE_NOT_READABLE'] = "Syslog文件不可读, 可能没有读取文件权限";
$content['LN_ERROR_UNKNOWN'] = "Unknown or unhandled error occured (Error Code '%1')";
$content['LN_ERROR_FILE_EOF'] = "End of File reached";
$content['LN_ERROR_FILE_BOF'] = "Begin of File reeached";
$content['LN_ERROR_FILE_CANT_CLOSE'] = "不能关闭文件";
$content['LN_ERROR_UNDEFINED'] = "未定义错误";
$content['LN_ERROR_EOS'] = "End of stream reached";
$content['LN_ERROR_FILTER_NOT_MATCH'] = "过滤不能匹配任何结果";
$content['LN_ERROR_DB_CONNECTFAILED'] = "连接数据库失败";
$content['LN_ERROR_DB_CANNOTSELECTDB'] = "无法发现配置的数据库";
$content['LN_ERROR_DB_QUERYFAILED'] = "数据查询执行失败";
$content['LN_ERROR_DB_NOPROPERTIES'] = "No database properties found";
$content['LN_ERROR_DB_INVALIDDBMAPPING'] = "Invalid datafield mappings";
$content['LN_ERROR_DB_INVALIDDBDRIVER'] = "Invalid database driver selected";
$content['LN_ERROR_DB_TABLENOTFOUND'] = "Could not find the configured table, maybe misspelled or the tablenames are case sensitive";
$content['LN_ERROR_DB_DBFIELDNOTFOUND'] = "Database Field mapping for at least one field could not be found.";
$content['LN_GEN_SELECTEXPORT'] = "选择导出格式";
$content['LN_GEN_EXPORT_CVS'] = "CSV (逗号分割)";
$content['LN_GEN_EXPORT_XML'] = "XML";
$content['LN_GEN_EXPORT_PDF'] = "PDF";
$content['LN_GEN_ERROR_EXPORING'] = "导出错误";
$content['LN_GEN_ERROR_INVALIDEXPORTTYPE'] = "Invalid Export format selected, or other parameters were wrong.";
$content['LN_GEN_ERROR_SOURCENOTFOUND'] = "The Source with ID '%1' could not be found.";
$content['LN_GEN_MOREINFORMATION'] = "更多信息";
$content['LN_FOOTER_PAGERENDERED'] = "Page rendered in";
$content['LN_FOOTER_DBQUERIES'] = "DB queries";
$content['LN_FOOTER_GZIPENABLED'] = "开启GZIP";
$content['LN_FOOTER_SCRIPTTIMEOUT'] = "Script Timeout";
$content['LN_FOOTER_SECONDS'] = "秒";
$content['LN_WARNING_LOGSTREAMTITLE'] = "Logstream Warning";
$content['LN_WARNING_LOGSTREAMDISK_TIMEOUT'] = "While reading the logstream, the php script timeout forced me to abort at this point.<br><br> If you want to avoid this, please increase the LogAnalyzer script timeout in your config.php. If the user system is installed, you can do that in Admin center.";
$content['LN_ERROR_FILE_NOMORETIME'] = "No more time for processing left";
$content['LN_WARNING_DBUPGRADE'] = "Database Upgrade required";
$content['LN_WARNING_DBUPGRADE_TEXT'] = "The current installed database version is '%1'.<br>An update to version '%2' is available.";
$content['LN_ERROR_REDIRECTABORTED'] = 'Automatic redirect to the <a href="%1">page</a> was aborted, as an internal error occured. Please see the error details above and contact our support forums if you need assistance.';
$content['LN_DEBUGLEVEL'] = "调试等级";
$content['LN_DEBUGMESSAGE'] = "调试信息";
$content['LN_GEN_REPORT_OUTPUT_HTML'] = "HTML 格式";
$content['LN_GEN_REPORT_OUTPUT_PDF'] = "PDF 格式";
$content['LN_GEN_REPORT_TARGET_STDOUT'] = "Direct Output";
$content['LN_GEN_REPORT_TARGET_FILE'] = "Save into File";
$content['LN_GEN_REPORT_TARGET_EMAIL'] = "以邮件发送";
$content['LN_GEN_UNKNOWN'] = "未知";
$content['LN_GEN_AUTH_INTERNAL'] = "Internal authentication";
$content['LN_GEN_AUTH_LDAP'] = "LDAP Authentication";

// Topmenu Entries
$content['LN_MENU_SEARCH'] = "搜索";
$content['LN_MENU_SHOWEVENTS'] = "显示事件";
$content['LN_MENU_HELP'] = "帮助";
	$content['LN_MENU_DOC'] = "文档";
	$content['LN_MENU_FORUM'] = "论坛支持";
	$content['LN_MENU_WIKI'] = "LogAnalyzer Wiki";
	$content['LN_MENU_PROSERVICES'] = "专业服务";
$content['LN_MENU_SEARCHINKB'] = "搜索知识库";
$content['LN_MENU_LOGIN'] = "登录";
$content['LN_MENU_ADMINCENTER'] = "管理员中心";
$content['LN_MENU_LOGOFF'] = "退出登录";
$content['LN_MENU_LOGGEDINAS'] = "登录为 ";
$content['LN_MENU_MAXVIEW'] = "最大化视图";
$content['LN_MENU_NORMALVIEW'] = "正常视图";
$content['LN_MENU_STATISTICS'] = "图表";
$content['LN_MENU_CLICKTOEXPANDMENU'] = "点击图标显示菜单";
	$content['LN_MENU_REPORTS'] = "报告";

// Main Index Site
$content['LN_ERROR_INSTALLFILEREMINDER'] = "Warning! You still have NOT removed the 'install.php' from your LogAnalyzer main directory!";
$content['LN_TOP_NUM'] = "No.";
$content['LN_TOP_UID'] = "uID";
$content['LN_GRID_POPUPDETAILS'] = "Details for Syslogmessage with ID '%1'";

$content['LN_SEARCH_USETHISBLA'] = "下面的表格将显示您的高级搜索使用的内容";
$content['LN_SEARCH_FILTER'] = "搜索 (过滤):";
$content['LN_SEARCH_ADVANCED'] = "高级搜索";
$content['LN_SEARCH'] = "搜索";
$content['LN_SEARCH_RESET'] = "重置条件";
$content['LN_SEARCH_PERFORMADVANCED'] = "确认高级搜索";
$content['LN_VIEW_MESSAGECENTERED'] = "Back to unfiltered view with this message at top";
$content['LN_VIEW_RELATEDMSG'] = "View related syslog messages";
$content['LN_VIEW_FILTERFOR'] = "Filter message for ";
$content['LN_VIEW_SEARCHFOR'] = "Search online for ";
$content['LN_VIEW_SEARCHFORGOOGLE'] = "Search Google for ";
$content['LN_GEN_MESSAGEDETAILS'] = "Message Details";
	$content['LN_VIEW_ADDTOFILTER'] = "Add '%1' to filterset";
	$content['LN_VIEW_EXCLUDEFILTER'] = "Exclude '%1' from filterset";
	$content['LN_VIEW_FILTERFORONLY'] = "Filter for '%1' only";
	$content['LN_VIEW_SHOWALLBUT'] = "Show all except '%1'";
	$content['LN_VIEW_VISITLINK'] = "在新窗口打开 '%1' 链接";

$content['LN_HIGHLIGHT'] = "高亮 >>";
$content['LN_HIGHLIGHT_OFF'] = "高亮 <<";
$content['LN_HIGHLIGHT_WORDS'] = "Highlight words comma separated";

$content['LN_AUTORELOAD'] = "设置自动刷新";
$content['LN_AUTORELOAD_DISABLED'] = "关闭自动刷新";
$content['LN_AUTORELOAD_PRECONFIGURED'] = "配置自动刷新 ";
$content['LN_AUTORELOAD_SECONDS'] = "秒";
$content['LN_AUTORELOAD_MINUTES'] = "分";

// Filter Options
$content['LN_FILTER_DATE'] = "日期范围";
$content['LN_FILTER_DATEMODE'] = "选择方式";
$content['LN_DATEMODE_ALL'] = "所有时间";
$content['LN_DATEMODE_RANGE'] = "时间范围";
$content['LN_DATEMODE_LASTX'] = "Time x since today";
$content['LN_FILTER_DATEFROM'] = "Date range from";
$content['LN_FILTER_DATETO'] = "Date range to";
$content['LN_FILTER_TIMEFROM'] = "Time range from";
$content['LN_FILTER_TIMETO'] = "Time range to";
$content['LN_FILTER_DATELASTX'] = "Time since";
$content['LN_FILTER_ADD2SEARCH'] = "Add to search";
$content['LN_DATE_LASTX_HOUR'] = "最后一小时";
$content['LN_DATE_LASTX_12HOURS'] = "Last 12 hours";
$content['LN_DATE_LASTX_24HOURS'] = "Last 24 hours";
$content['LN_DATE_LASTX_7DAYS'] = "Last 7 days";
$content['LN_DATE_LASTX_31DAYS'] = "Last 31 days";
$content['LN_FILTER_FACILITY'] = "日志设备";
$content['LN_FILTER_SEVERITY'] = "日志严重性";
$content['LN_FILTER_OTHERS'] = "其它条件";
$content['LN_FILTER_MESSAGE'] = "日志消息";
$content['LN_FILTER_SYSLOGTAG'] = "日志标签";
$content['LN_FILTER_SOURCE'] = "来源 (主机)";
$content['LN_FILTER_MESSAGETYPE'] = "消息类型";

// Install Page
$content['LN_CFG_DBSERVER'] = "数据库主机";
$content['LN_CFG_DBPORT'] = "数据库端口";
$content['LN_CFG_DBNAME'] = "数据库名字";
$content['LN_CFG_DBPREF'] = "数据表前缀";
$content['LN_CFG_DBUSER'] = "数据库用户";
$content['LN_CFG_DBPASSWORD'] = "数据库密码";
$content['LN_CFG_PARAMMISSING'] = "The following parameter were missing: ";
$content['LN_CFG_SOURCETYPE'] = "来源类型";
$content['LN_CFG_DISKTYPEOPTIONS'] = "磁盘类型操作";
$content['LN_CFG_LOGLINETYPE'] = "日志文件类型";
$content['LN_CFG_SYSLOGFILE'] = "日志文件";
$content['LN_CFG_DATABASETYPEOPTIONS'] = "Database Type Options";
$content['LN_CFG_DBTABLETYPE'] = "数据表类型";
$content['LN_CFG_DBSTORAGEENGINE'] = "数据存储引擎";
$content['LN_CFG_DBTABLENAME'] = "数据表名";
$content['LN_CFG_NAMEOFTHESOURCE'] = "来源的名字";
$content['LN_CFG_FIRSTSYSLOGSOURCE'] = "第一个日志来源";
$content['LN_CFG_DBROWCOUNTING'] = "开启行数";
$content['LN_CFG_VIEW'] = "选择视图";
$content['LN_CFG_DBUSERLOGINREQUIRED'] = "要求用户登录";
$content['LN_CFG_MSGPARSERS'] = "消息解析器 (逗号分隔)";
$content['LN_CFG_NORMALIZEMSG'] = "规范化解析器中的消息";
$content['LN_CFG_SKIPUNPARSEABLE'] = "Skip unparseable messages (Only works if msgparsers are configured!)";
$content['LN_CFG_DBRECORDSPERQUERY'] = "Recordcount for database queries";
$content['LN_CFG_LDAPServer'] = "LDAP Server Hostname/IP";
$content['LN_CFG_LDAPPort'] = "LDAP Port, default 389 (636 for SSL)";
$content['LN_CFG_LDAPBaseDN'] = "Base DN for LDAP Search";
$content['LN_CFG_LDAPSearchFilter'] = "Basic Search filter";
$content['LN_CFG_LDAPUidAttribute'] = "LDAP Username attribute";
$content['LN_CFG_LDAPBindDN'] = "Privilegied user used to LDAP queries";
$content['LN_CFG_LDAPBindPassword'] = "Password of the privilegied user";
$content['LN_CFG_LDAPDefaultAdminUser'] = "Default administrative LDAP Username";
$content['LN_CFG_AUTHTYPE'] = "认证模式";
$content['LN_GEN_AUTH_LDAP_OPTIONS'] = "LDAP认证选项";

// Details page
$content['LN_DETAILS_FORSYSLOGMSG'] = "Details for the syslog messages with id";
$content['LN_DETAILS_DETAILSFORMSG'] = "Details for message id";
$content['LN_DETAIL_BACKTOLIST'] = "Back to Listview";
$content['LN_DETAIL_DYNAMIC_FIELDS'] = "动态字段";


// Login Site
$content['LN_LOGIN_DESCRIPTION'] = "在此登录到 LogAnalyzer. ";
$content['LN_LOGIN_TITLE'] = "登录";
$content['LN_LOGIN_USERNAME'] = "用户名";
$content['LN_LOGIN_PASSWORD'] = "密码";
$content['LN_LOGIN_SAVEASCOOKIE'] = "开启保持登录";
$content['LN_LOGIN_ERRWRONGPASSWORD'] = "错误的用户名或者密码!!";
$content['LN_LOGIN_USERPASSMISSING'] = "Username or password not given";
$content['LN_LOGIN_LDAP_USERNOTFOUND'] = "User '%1' could not be found";
$content['LN_LOGIN_LDAP_USERCOULDNOTLOGIN'] = "Could not login user '%1', LDAP error: %2";
$content['LN_LOGIN_LDAP_PASSWORDFAIL'] = "User '%1' could not login with the given password";
$content['LN_LOGIN_LDAP_SERVERFAILED'] = "Failed to connect to LDAP Server '%1'";
$content['LN_LOGIN_LDAP_USERBINDFAILED'] = "Could not bind with the Search user DN '%1'";


// Install Site
$content['LN_INSTALL_TITLETOP'] = "安装 LogAnalyzer ,版本 %1 - 步骤 %2";
$content['LN_INSTALL_TITLE'] = "安装步骤 %1";
$content['LN_INSTALL_ERRORINSTALLED'] = 'LogAnalyzer已经安装<br><br> 如果你想重新安装,请编辑清空或者删除当前的 <B>config.php</B> 文件.<br><br>点击 <A HREF="index.php">这里</A> 返回开始页面';
$content['LN_INSTALL_FILEORDIRNOTWRITEABLE'] = "至少一个文件或目录不可写,请检查权限是否正确(chmod 666)!";
$content['LN_INSTALL_SAMPLECONFIGMISSING'] = "The sample configuration file '%1' is missing. You have not fully uploaded LogAnalyzer.";
$content['LN_INSTALL_ERRORCONNECTFAILED'] = "Database connect to '%1' failed! Please check Servername, Port, User and Password!";
$content['LN_INSTALL_ERRORACCESSDENIED'] = "Cannot use the database  '%1'! If the database does not exists, create it or check user access permissions!";
$content['LN_INSTALL_ERRORINVALIDDBFILE'] = "Error, invalid Database definition file (to short!), the file name is '%1'! Please check if the file was correctly uploaded.";
$content['LN_INSTALL_ERRORINSQLCOMMANDS'] = "错误, 非法的数据库文件(没有发现SQL语句!), 文件名为: '%1'<br> 请请检查文件是否上传, 或者连接到 LogAnalyzer 论坛寻求帮助!";
$content['LN_INSTALL_MISSINGUSERNAME'] = "Username needs to be specified";
$content['LN_INSTALL_PASSWORDNOTMATCH'] = "Either the password does not match or is to short!";
$content['LN_INSTALL_FAILEDTOOPENSYSLOGFILE'] = "Failed to open the syslog file '%1'! Check if the file exists and LogAnalyzer has sufficient rights to it<br>";
$content['LN_INSTALL_FAILEDCREATECFGFILE'] = "Coult not create the configuration file in '%1'! Please verify the file permissions!";
$content['LN_INSTALL_FAILEDREADINGFILE'] = "Error reading the file '%1'! Please verify if the file exists!";
$content['LN_INSTALL_ERRORREADINGDBFILE'] = "Error reading the default database definition file in '%1'! Please verify  if the file exists!";
$content['LN_INSTALL_STEP1'] = "步骤 1 - 安装要求";
$content['LN_INSTALL_STEP2'] = "步骤 2 - 验证文件权限";
$content['LN_INSTALL_STEP3'] = "步骤 3 - 基础配置";
$content['LN_INSTALL_STEP4'] = "步骤 4 - 创建表格";
$content['LN_INSTALL_STEP5'] = "步骤 5 - 检查SQL执行结果";
$content['LN_INSTALL_STEP6'] = "步骤 6 - 创建主要账户";
$content['LN_INSTALL_STEP7'] = "步骤 7 - 创建第一个日志来源";
$content['LN_INSTALL_STEP8'] = "步骤 8 - 完成";
$content['LN_INSTALL_STEP1_TEXT'] = '现在将通过以下的步骤进行安装,你可能需要先正确设置文件的权限. <br><br>点击 <input type="submit" value="继续"> 按钮进行安装测试!';
$content['LN_INSTALL_STEP2_TEXT'] = "下面的文件将会被检查权限. 验证结果如下 <br>你可以使用在 <B>contrib</B> 目录下的 <B>configure.sh</B> 脚本进行设置权限";
$content['LN_INSTALL_STEP3_TEXT'] = "在这个步骤你将会做一些基础的配置.";
$content['LN_INSTALL_STEP4_TEXT'] = '到了这个步骤,说明你已经正确成功连接了数据库了<br><br> 下一步将创建必要的数据库表给LogAnalyzer 用户系统. 这个只需要一会儿<br> <b>注意</b>, 如果你已经安装过了, 并且表前缀是一样的.
那么这个操作将会覆盖旧的数据库.请确认你用的是新的数据库或如果你真想覆盖旧的数据<br> 点击<input type="submit" value="继续"> 来创建新数据表</br>';
$content['LN_INSTALL_STEP5_TEXT'] = "数据表已经被创建,现检查以下可能的错误";
$content['LN_INSTALL_STEP6_TEXT'] = "你将会创建新的账户.<br> 这个将还创建一个管理员账户,用于登录到LogAnalyzer界面以及管理中心";
$content['LN_INSTALL_STEP8_TEXT'] = '恭喜! 你已经成功安装了 :)! <br><br>点击 <a href="index.php">这里</a> 继续.';
$content['LN_INSTALL_PROGRESS'] = "安装进度: ";
$content['LN_INSTALL_FRONTEND'] = "前端选项";
$content['LN_INSTALL_NUMOFSYSLOGS'] = "每页显示日志数量";
$content['LN_INSTALL_MSGCHARLIMIT'] = "信息字符最大显示数";
$content['LN_INSTALL_STRCHARLIMIT'] = "字段中显示的字符数";
$content['LN_INSTALL_SHOWDETAILPOP'] = "信息详细信息弹出窗口";
$content['LN_INSTALL_AUTORESOLVIP'] = "自动解析IP (在行中)";
$content['LN_INSTALL_USERDBOPTIONS'] = "用户数据库选项";
$content['LN_INSTALL_ENABLEUSERDB'] = "开启用户数据库";
$content['LN_INSTALL_SUCCESSSTATEMENTS'] = "执行成功的语句:";
$content['LN_INSTALL_FAILEDSTATEMENTS'] = "执行失败的语句:";
$content['LN_INSTALL_STEP5_TEXT_NEXT'] = "你现在可以点击 <B>继续</B> 来添加用户了!";
$content['LN_INSTALL_STEP5_TEXT_FAILED'] = "至少一个错误发生,错误如下";
$content['LN_INSTALL_ERRORMSG'] = "错误信息";
$content['LN_INSTALL_SQLSTATEMENT'] = "SQL语句";
$content['LN_INSTALL_CREATEUSER'] = "创建用户帐号";
$content['LN_INSTALL_PASSWORD'] = "密码";
$content['LN_INSTALL_PASSWORDREPEAT'] = "确认密码";
$content['LN_INSTALL_SUCCESSCREATED'] = "成功创建用户";
$content['LN_INSTALL_RECHECK'] = "重新检查";
$content['LN_INSTALL_FINISH'] = "完成!";
$content['LN_INSTALL_LDAPCONNECTFAILED'] = "Failed to connect to your LDAP Server '%1'.";
$content['LN_INSTALL_WARNINGMYSQL'] = "此功能需要 MYSQL 数据库服务器。用户数据库系统不支持其他数据库引擎。但是, 对于日志源, 有对其他数据库系统的支持";
$content['LN_INSTALL_'] = "";

// Converter Site
$content['LN_CONVERT_TITLE'] = "Configuration Converter Step %1";
$content['LN_CONVERT_NOTALLOWED'] = "Login";
$content['LN_CONVERT_ERRORINSTALLED'] = 'LogAnalyzer is not allowed to convert your settings into the user database.<br><br> If you want to convert your convert your settings, add the variable following into your config.php: <br><b>$CFG[\'UserDBConvertAllowed\'] = true;</b><br><br> Click <A HREF="index.php">here</A> to return to pgpLogCon start page.';
$content['LN_CONVERT_STEP1'] = "Step 1 - Informations";
$content['LN_CONVERT_STEP2'] = "Step 2 - Create Tables";
$content['LN_CONVERT_STEP3'] = "Step 3 - Check SQL Results";
$content['LN_CONVERT_STEP4'] = "Step 4 - Creating the Main Useraccount";
$content['LN_CONVERT_STEP5'] = "Step 5 - Import Settings into UserDB";
$content['LN_CONVERT_TITLETOP'] = "Converting LogAnalyzer configuration settings - Step ";
$content['LN_CONVERT_STEP1_TEXT'] = 'This script allows you to import your existing configuration from the <b>config.php</b> file. This includes frontend settings, data sources, custom views and custom searches. Do only perform this conversion if you did install LogAnalyzer without the UserDB System, and decided to enable it now. <br><br><b>ANY EXISTING INSTANCE OF A USERDB WILL BE OVERWRITTEN!</b><br><br><input type="submit" value="Click here"> to start the first conversion step!';
$content['LN_CONVERT_STEP2_TEXT'] = 'The database connection has been successfully verified! <br><br>The next step will be to create the necessary database tables for the LogAnalyzer User System. This might take a while! <br><b>WARNING</b>, if you have an existing LogAnalyzer installation in this database with the same tableprefix, all your data will be <b>OVERWRITTEN</b>!<br> Make sure you are using a fresh database, or you want to overwrite your old LogAnalyzer database.<br><br><b>Click on <input type="submit" value="Next"> to start the creation of the tables</b>';
$content['LN_CONVERT_STEP5_TEXT'] = '<input type="submit" value="Click here"> to start the last step of the conversion. In this step, your existing configuration from the <b>config.php</b> will be imported into the database.';
$content['LN_CONVERT_STEP6'] = "步骤 8 - 完成";
$content['LN_CONVERT_STEP6_TEXT'] = '恭喜! 你已经成功安装 :)!<br><br>Important! Don\'t forget to REMOVE THE VARIABLES <b>$CFG[\'UserDBConvertAllowed\'] = true;</b> from your config.php file! <br><br>You can click <a href="index.php">here</a> to get to your LogAnalyzerinstallation.';
$content['LN_CONVERT_PROCESS'] = "Conversion Progress:";
$content['LN_CONVERT_ERROR_SOURCEIMPORT'] = "Critical Error while importing the sources into the database, the SourceType '%1' is not supported by this LogAnalyzer Version.";

// Stats Site
	$content['LN_STATS_CHARTTITLE'] = "Top %1 '%2' sorted by messagecount";
	$content['LN_STATS_COUNTBY'] = "Messagecount by '%1'";
	$content['LN_STATS_OTHERS'] = "All Others";
	$content['LN_STATS_TOPRECORDS'] = "Maxrecords: %1";
	$content['LN_STATS_GENERATEDAT'] = "Generated at: %1";
//	$content['LN_STATS_COUNTBYSYSLOGTAG'] = "Messagecount by SyslogTag";
	$content['LN_STATS_GRAPH'] = "Graph";
	$content['LN_GEN_ERROR_INVALIDFIELD'] = "Invalid fieldname";
	$content['LN_GEN_ERROR_MISSINGCHARTFIELD'] = "Missing fieldname";
	$content['LN_GEN_ERROR_INVALIDTYPE'] = "Invalid or unknown chart type.";
	$content['LN_ERROR_CHARTS_NOTCONFIGURED'] = "There are no charts configured at all.";
	$content['LN_CHART_TYPE'] = "图表类型";
	$content['LN_CHART_WIDTH'] = "Chart width";
	$content['LN_CHART_FIELD'] = "Chart field";
	$content['LN_CHART_MAXRECORDS'] = "Top records count";
	$content['LN_CHART_SHOWPERCENT'] = "Show percentage data";
	$content['LN_CHART_TYPE_CAKE'] = "Cake (Pie)";
	$content['LN_CHART_TYPE_BARS_VERTICAL'] = "Bars vertical";
	$content['LN_CHART_TYPE_BARS_HORIZONTAL'] = "Bars horizontal";
	$content['LN_STATS_WARNINGDISPLAY'] ="目前在超多数据的源上生成图形非常耗时。这将在更高版本中解决。如果处理时间过长, 请简单地取消请求";

// asktheoracle site
$content['LN_ORACLE_TITLE'] = "Asking the oracle for '%1'";
$content['LN_ORACLE_HELP_FOR'] = "These are the links the oracle got for you";
$content['LN_ORACLE_HELP_TEXT'] = "<br><h3>You asked the oracle to find more information about the '%1' value '%2'.</h3>
<p align=\"left\">This pages enables you do a a search over multiple log sources. %3
<br>The overall idea is to make it easy to find information about a specific subject in all places where it may exist.
</p>
<p align=\"left\">A useful use case may be a hack attempt you see in a web log. Click on the attacker's IP, which brings up this search page here. Now you can both lookup information about the IP range as well as check your other logs (e.g. firewall or mail) if they contain information about the attacker. We hope that this facilitates your analysis process.
</p>
";
$content['LN_ORACLE_HELP_TEXT_EXTERNAL'] = "It also enables you to perform canned searches over some external databases";
$content['LN_ORACLE_HELP_DETAIL'] = "Link matrix for the '%1' value '%2'";
$content['LN_ORACLE_SEARCH'] = "Search"; // in '%1' Field";
$content['LN_ORACLE_SOURCENAME'] = "Source name";
$content['LN_ORACLE_FIELD'] = "Field";
$content['LN_ORACLE_ONLINESEARCH'] = "Online Search";
$content['LN_ORACLE_WHOIS'] = "WHOIS Lookup for '%1' value '%2'";

// Report Strings
$content['LN_GEN_ERROR_INVALIDOP'] = "Invalid or missing operation type";
$content['LN_GEN_ERROR_INVALIDREPORTID'] = "Invalid or missing report id";
$content['LN_GEN_ERROR_MISSINGSAVEDREPORTID'] = "Invalid or missing savedreport id";
$content['LN_GEN_ERROR_REPORTGENFAILED'] = "Failed generating report '%1' with the following error reason: %2";
$content['LN_GEN_ERROR_WHILEREPORTGEN'] = "Error occured while generating report"; 
$content['LN_GEN_ERROR_REPORT_NODATA'] = "No data found for report generation"; 
$content['LN_GEN_ALL_OTHER_EVENTS'] = "All other events";
$content['LN_REPORT_FOOTER_ENDERED'] = "Report rendered in";
$content['LN_REPORT_FILTERS'] = "List of used filters";
$content['LN_REPORT_FILTERTYPE_DATE'] = "Date";
$content['LN_REPORT_FILTERTYPE_NUMBER'] = "Number";
$content['LN_REPORT_FILTERTYPE_STRING'] = "String";
$content['LN_GEN_SUCCESS_WHILEREPORTGEN'] = "Report was successfully generated";
$content['LN_GEN_ERROR_REPORTFAILEDTOGENERATE'] = "Failed to generate report, error details: %1";
$content['LN_GEN_SUCCESS_REPORTWASGENERATED_DETAILS'] = "Successfully generated report: %1";
$content['LN_ERROR_PATH_NOT_ALLOWED'] = "The file is not located in the allowed directories list (By default /var/log is allowed only)."; 
$content['LN_ERROR_PATH_NOT_ALLOWED_EXTRA'] = "The file '%1' is not located in one of these directories: '%2'"; 

$content['LN_CMD_RUNREPORT'] = "Generating saved report '%1'";
$content['LN_CMD_REPORTIDNOTFOUND'] = "Invalid Report ID '%1'";
$content['LN_CMD_SAVEDREPORTIDNOTFOUND'] = "Invalid SavedReport ID '%1'";
$content['LN_CMD_NOREPORTID'] = "Missing Report ID";
$content['LN_CMD_NOSAVEDREPORTID'] = "Missing SavedReport ID";
$content['LN_CMD_NOCMDPROMPT'] = "Error, this script can only be run from the command prompt.";
$content['LN_REPORT_GENERATEDTIME'] = "Report generated at: ";

$content['LN_REPORT_ACTIONS'] = "Run Report Actions";
$content['LN_REPORTS_CAT'] = "Report Category";
$content['LN_REPORTS_ID'] = "报告编号";
$content['LN_REPORTS_NAME'] = "报告名字";
$content['LN_REPORTS_DESCRIPTION'] = "报告描述";
$content['LN_REPORTS_HELP'] = "帮助";
$content['LN_REPORTS_HELP_CLICK'] = "Click here for a detailed report description";
$content['LN_REPORTS_INFO'] = "显示更多信息";
$content['LN_REPORTS_SAVEDREPORTS'] = "保存报告";
$content['LN_REPORTS_ADMIN'] = "管理报告";
$content['LN_REPORTMENU_LIST'] = "已装报告列表";
$content['LN_REPORTMENU_ONLINELIST'] = "所有可用报告";
$content['LN_REPORTS_INFORMATION'] = "要运行报表, 请单击 '已保存的报表' 右侧的按钮。注意！生成报表可能非常耗时, 具体取决于数据库的大小";
$content['LN_REPORTS_CHECKLOGSTREAMSOURCE'] = "Verify Logstream optimization";
$content['LN_REPORTS_RUNNOW'] = "运行和保存报告";
$content['LN_REPORTS_ERROR_ERRORCHECKINGSOURCE'] = "Error while checking Savedreport Source: %1";

?>