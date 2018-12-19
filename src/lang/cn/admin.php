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
$content['LN_ADMINMENU_HOMEPAGE'] = "返回显示事件";
$content['LN_ADMINMENU_GENOPT'] = "配置";
$content['LN_ADMINMENU_SOURCEOPT'] = "来源";
$content['LN_ADMINMENU_VIEWSOPT'] = "视图";
$content['LN_ADMINMENU_SEARCHOPT'] = "筛选器";
$content['LN_ADMINMENU_USEROPT'] = "用户";
$content['LN_ADMINMENU_GROUPOPT'] = "组";
$content['LN_ADMINMENU_CHARTOPT'] = "图表";
$content['LN_ADMINMENU_FIELDOPT'] = "字段";
$content['LN_ADMINMENU_DBMAPPINGOPT'] = "数据映射";
$content['LN_ADMINMENU_MSGPARSERSOPT'] = "消息解析器";
$content['LN_ADMINMENU_REEPORTSOPT'] = "报告模块";
$content['LN_ADMIN_CENTER'] = "管理中心";
$content['LN_ADMIN_UNKNOWNSTATE'] = "未知状态";
$content['LN_ADMIN_ERROR_NOTALLOWED'] = "You are not allowed to access this page with your user level.";
$content['LN_DELETEYES'] = "Yes";
$content['LN_DELETENO'] = "No";
$content['LN_GEN_ACTIONS'] = "操作";
$content['LN_ADMIN_SEND'] = "发送修改";
$content['LN_GEN_USERONLY'] = "仅是用户";
$content['LN_GEN_USERONLYNAME'] = "User '%1'";
$content['LN_GEN_GROUPONLY'] = "Group only";
$content['LN_GEN_GLOBAL'] = "Global";
$content['LN_GEN_USERONLY_LONG'] = "For me only <br>(Only available to your user)";
$content['LN_GEN_GROUPONLY_LONG'] = "For this group <br>(Only available to the selected group)";
$content['LN_GEN_GROUPONLYNAME'] = "Group '%1'";
$content['LN_ADMIN_POPUPHELP'] = "Details on this function";
$content['LN_ADMIN_DBSTATS'] = "Show database statistics.";
$content['LN_ADMIN_CLEARDATA'] = "If you need to remove old data records, use this function.";
$content['LN_UPDATE_AVAILABLE'] = "Update available";
$content['LN_UPDATE_INSTALLEDVER'] = "Installed version: ";
$content['LN_UPDATE_AVAILABLEVER'] = "Available version: ";
$content['LN_UPDATE_LINK'] = "Click here to get the update";
$content['LN_ADMIN_RESULTREDIRECT'] = "You will be redirected to the <A HREF='%1'>this page</A> on %2 seconds.";
$content['LN_ADMIN_RESULTCLICK'] = "点击 <A HREF='%1'>这里</A> 继续.";
$content['LN_ADMIN_GOBACK'] = "Go Back";

// General Options
$content['LN_ADMIN_GLOBFRONTEND'] = "全局前端配置";
$content['LN_ADMIN_USERFRONTEND'] = "User specific frontend options";
$content['LN_ADMIN_MISC'] = "杂项";
$content['LN_GEN_SHOWDEBUGMSG'] = "输出调试信息";
$content['LN_GEN_DEBUGGRIDCOUNTER'] = "Show Debug Gridcounter";
$content['LN_GEN_SHOWPAGERENDERSTATS'] = "Show Pagerenderstats";
$content['LN_GEN_ENABLEGZIP'] = "开启 GZIP 压缩输出";
$content['LN_GEN_DEBUGUSERLOGIN'] = "Debug Userlogin";
$content['LN_GEN_WEBSTYLE'] = "默认样式";
$content['LN_GEN_SELLANGUAGE'] = "默认语言";
$content['LN_GEN_PREPENDTITLE'] = "Prepend this string in title";
$content['LN_GEN_USETODAY'] = "Use Today and Yesterday in timefields";
$content['LN_GEN_DETAILPOPUPS'] = "Use Popup to display the full messagedetails";
$content['LN_GEN_MSGCHARLIMIT'] = "Character limit of the message in main view";
$content['LN_GEN_STRCHARLIMIT'] = "Character display limit for all string type fields";
$content['LN_GEN_ENTRIESPERPAGE'] = "Number of entries per page";
$content['LN_GEN_AUTORELOADSECONDS'] = "Enable autoreload after seconds";
$content['LN_GEN_ADMINCHANGEWAITTIME'] = "Reloadtime in Adminpanel";
$content['LN_GEN_IPADRRESOLVE'] = "Resolve IP Addresses using DNS";
$content['LN_GEN_CUSTBTNCAPT'] = "Custom search caption";
$content['LN_GEN_CUSTBTNSRCH'] = "Custom search string";
$content['LN_GEN_SUCCESSFULLYSAVED'] = "配置已成功保存";
$content['LN_GEN_INTERNAL'] = "Internal";
$content['LN_GEN_DISABLED'] = "Function disabled";
$content['LN_GEN_CONFIGFILE'] = "Configuration File";
$content['LN_GEN_ACCESSDENIED'] = "Access denied to this function";
$content['LN_GEN_DEFVIEWS'] = "默认选择样式";
$content['LN_GEN_DEFSOURCE'] = "默认选择来源";
$content['LN_GEN_DEFFONT'] = "默认字体";
$content['LN_GEN_DEFFONTSIZE'] = "默认字体大小";
$content['LN_GEN_SUPPRESSDUPMSG'] = "Suppress duplicated messages";
$content['LN_GEN_TREATFILTERSTRUE'] = "Treat filters of not found fields as true";
$content['LN_GEN_INLINESEARCHICONS'] = "Show Onlinesearch icons within fields";
$content['LN_GEN_OPTIONNAME'] = "选项名";
$content['LN_GEN_GLOBALVALUE'] = "全局配置";
$content['LN_GEN_PERSONALVALUE'] = "个人配置";
$content['LN_GEN_DISABLEUSEROPTIONS'] = "点击这里关闭个人配置";
$content['LN_GEN_ENABLEUSEROPTIONS'] = "点击这里开启个人配置";
$content['LN_ADMIN_GLOBALONLY'] = "仅是全局选项";
$content['LN_GEN_DEBUGTOSYSLOG'] = "发送调试信息到本地Syslog服务器";
$content['LN_GEN_POPUPMENUTIMEOUT'] = "Popupmenu Timeout in milli seconds";
$content['LN_ADMIN_SCRIPTTIMEOUT'] = "PHP 脚本超时";
$content['LN_GEN_INJECTHTMLHEADER'] = "插入超文本代码在 &lt;head&gt; 里.";
$content['LN_GEN_INJECTBODYHEADER'] = "插入超文本代码在 &lt;body&gt; 前.";
$content['LN_GEN_INJECTBODYFOOTER'] = "插入超文本代码在 &lt;body&gt; 后.";
$content['LN_ADMIN_PHPLOGCON_LOGOURL'] = "Optional LogAnalyzer Logo URL. Leave empty to use the default one.";
$content['LN_ADMIN_ERROR_READONLY'] = "This is a READONLY User, you are not allowed to perform any change operations.";
$content['LN_ADMIN_ERROR_NOTALLOWEDTOEDIT'] = "You are not allowed to edit this configuration item.";
$content['LN_ADMIN_USEPROXYSERVER'] = "Leave empty if you do not want to use a proxy server! If set to valid proxy server (for example '127.0.0.1:8080'), LogAnalyzer will use this server for remote queries like the update check feature.";
$content['LN_ADMIN_DEFAULTENCODING'] = "默认编码";
$content['LN_GEN_CONTEXTLINKS'] = "Enable Contextlinks (Question marks)";
$content['LN_GEN_DISABLEADMINUSERS'] = "Disable Adminpanel for normal users";

// User Center
$content['LN_USER_CENTER'] = "用户选项";
$content['LN_USER_ID'] = "编号";
$content['LN_USER_NAME'] = "用户名";
$content['LN_USER_ADD'] = "添加用户";
$content['LN_USER_EDIT'] = "编辑用户";
$content['LN_USER_DELETE'] = "删除用户";
$content['LN_USER_PASSWORD1'] = "密码";
$content['LN_USER_PASSWORD2'] = "确认密码";
$content['LN_USER_ERROR_IDNOTFOUND'] = "Error, User with ID '%1' , was not found";
$content['LN_USER_ERROR_DONOTDELURSLF'] = "Error, you can not DELETE YOURSELF!";
$content['LN_USER_ERROR_DELUSER'] = "Deleting of the user with id '%1' failed!";
$content['LN_USER_ERROR_INVALIDID'] = "Error, invalid ID, User not found";
$content['LN_USER_ERROR_HASBEENDEL'] = "The User '%1' has been successfully deleted!";
$content['LN_USER_ERROR_USEREMPTY'] = "Error, Username was empty";
$content['LN_USER_ERROR_USERNAMETAKEN'] = "Error, this Username is already taken!";
$content['LN_USER_ERROR_PASSSHORT'] = "Error, Password was to short, or did not match";
$content['LN_USER_ERROR_HASBEENADDED'] = "User '%1' has been successfully added";
$content['LN_USER_ERROR_HASBEENEDIT'] = "User '%1' has been successfully edited";
$content['LN_USER_ISADMIN'] = "是否管理员?";
$content['LN_USER_ADDEDIT'] = "添加/编辑 用户";
$content['LN_USER_WARNREMOVEADMIN'] = "You are about to revoke your own administrative priviledges. Are you sure to remove your admin status?";
$content['LN_USER_WARNDELETEUSER'] = "Are you sure that you want to delete the User '%1'? All his personal settings will be deleted as well.";
$content['LN_USER_ERROR_INVALIDSESSIONS'] = "Invalid User Session.";
$content['LN_USER_ERROR_SETTINGFLAG'] = "Error setting flag, invalid ID or User not found";
$content['LN_USER_WARNRADYONLYADMIN'] = "You are about to set your account to readonly! This will prevent you from changing any settings! Are you sure that you want to proceed?";
$content['LN_USER_ISREADONLY'] = "只读用户?";
$content['LN_USER_SETISADMIN'] = "Toggle IsAdmin State";
$content['LN_USER_SETISREADONLY'] = "Toggle IsReadOnly State";

// Group center
$content['LN_GROUP_CENTER'] = "组中心";
$content['LN_GROUP_ID'] = "编号";
$content['LN_GROUP_NAME'] = "组名";
$content['LN_GROUP_DESCRIPTION'] = "组描述";
$content['LN_GROUP_TYPE'] = "组类型";
$content['LN_GROUP_ADD'] = "添加组";
$content['LN_GROUP_EDIT'] = "编辑组";
$content['LN_GROUP_DELETE'] = "删除组";
$content['LN_GROUP_NOGROUPS'] = "没有添加任何组";
$content['LN_GROUP_ADDEDIT'] = "添加/编辑 组";
$content['LN_GROUP_ERROR_GROUPEMPTY'] = "组名不能为空.";
$content['LN_GROUP_ERROR_GROUPNAMETAKEN'] = "组名已被占用.";
$content['LN_GROUP_HASBEENADDED'] = "The group '%1' has been successfully added.";
$content['LN_GROUP_ERROR_IDNOTFOUND'] = "The group with ID '%1' could not be found.";
$content['LN_GROUP_ERROR_HASBEENEDIT'] = "The group '%1' has been successfully edited.";
$content['LN_GROUP_ERROR_INVALIDGROUP'] = "Error, invalid ID, Group not found";
$content['LN_GROUP_WARNDELETEGROUP'] = "Are you sure that you want to delete the Group '%1'? All Groupsettings will be deleted as well.";
$content['LN_GROUP_ERROR_DELGROUP'] = "Deleting of the group with id '%1' failed!";
$content['LN_GROUP_ERROR_HASBEENDEL'] = "The Group '%1' has been successfully deleted!";
$content['LN_GROUP_MEMBERS'] = "组员: ";
$content['LN_GROUP_ADDUSER'] = "添加用户进组";
$content['LN_GROUP_ERROR_USERIDMISSING'] = "The userid is missing.";
$content['LN_GROUP_USERHASBEENADDEDGROUP'] = "The User '%1' has been successfully added to group '%2'";
$content['LN_GROUP_ERRORNOMOREUSERS'] = "There are no more available users who can be added to the group '%1'";
$content['LN_GROUP_USER_ADD'] = "Add User to the group";
$content['LN_GROUP_USERDELETE'] = "Remove a User from the group";
$content['LN_GROUP_ERRORNOUSERSINGROUP'] = "There are no users to remove in this the group '%1'";
$content['LN_GROUP_ERROR_REMUSERFROMGROUP'] = "The user '%1' could not be removed from the group '%2'";
$content['LN_GROUP_USERHASBEENREMOVED'] = "The user '%1' has been successfully removed from the group '%2'";
$content['LN_GROUP_'] = "";

// Custom Searches center
$content['LN_SEARCH_CENTER'] = "预制筛选器";
$content['LN_SEARCH_ADD'] = "添加预制筛选器";
$content['LN_SEARCH_ID'] = "编号";
$content['LN_SEARCH_NAME'] = "筛选器名字";
$content['LN_SEARCH_QUERY'] = "筛选器查询";
$content['LN_SEARCH_TYPE'] = "被分配给";
$content['LN_SEARCH_EDIT'] = "编辑筛选器";
$content['LN_SEARCH_DELETE'] = "删除筛选器";
$content['LN_SEARCH_ADDEDIT'] = "添加 / 编辑 筛选器";
$content['LN_SEARCH_SELGROUPENABLE'] = ">> Select Group to enable <<";
$content['LN_SEARCH_ERROR_DISPLAYNAMEEMPTY'] = "The DisplayName cannot be empty.";
$content['LN_SEARCH_ERROR_SEARCHQUERYEMPTY'] = "The SearchQuery cannot be empty.";
$content['LN_SEARCH_HASBEENADDED'] = "The Custom Search '%1' has been successfully added.";
$content['LN_SEARCH_ERROR_IDNOTFOUND'] = "Could not find a search with ID '%1'.";
$content['LN_SEARCH_ERROR_INVALIDID'] = "Invalid search ID.";
$content['LN_SEARCH_HASBEENEDIT'] = "The Custom Search '%1' has been successfully edited.";
$content['LN_SEARCH_WARNDELETESEARCH'] = "Are you sure that you want to delete the Custom Search '%1'? This cannot be undone!";
$content['LN_SEARCH_ERROR_DELSEARCH'] = "Deleting of the Custom Search with id '%1' failed!";
$content['LN_SEARCH_ERROR_HASBEENDEL'] = "The Custom Search '%1' has been successfully deleted!";
$content['LN_SEARCH_'] = "";

// Custom Views center
$content['LN_VIEWS_CENTER'] = "视图选项";
$content['LN_VIEWS_ID'] = "编号";
$content['LN_VIEWS_NAME'] = "视图名字";
$content['LN_VIEWS_COLUMNS'] = "视图列";
$content['LN_VIEWS_TYPE'] = "被分配给";
$content['LN_VIEWS_ADD'] = "添加视图";
$content['LN_VIEWS_EDIT'] = "编辑视图";
$content['LN_VIEWS_ERROR_IDNOTFOUND'] = "A View with ID '%1' could not be found.";
$content['LN_VIEWS_ERROR_INVALIDID'] = "The View with ID '%1' is not a valid View.";
$content['LN_VIEWS_WARNDELETEVIEW'] = "Are you sure that you want to delete the View '%1'? This cannot be undone!";
$content['LN_VIEWS_ERROR_DELSEARCH'] = "Deleting of the View with id '%1' failed!";
$content['LN_VIEWS_ERROR_HASBEENDEL'] = "The View '%1' has been successfully deleted!";
$content['LN_VIEWS_ADDEDIT'] = "添加 / 编辑 视图";
$content['LN_VIEWS_COLUMNLIST'] = "Configured Columns";
$content['LN_VIEWS_ADDCOLUMN'] = "Add Column into list";
$content['LN_VIEWS_ERROR_DISPLAYNAMEEMPTY'] = "The DisplayName cannot be empty.";
$content['LN_VIEWS_COLUMN'] = "Column";
$content['LN_VIEWS_COLUMN_REMOVE'] = "Remove Column";
$content['LN_VIEWS_HASBEENADDED'] = "The Custom View '%1' has been successfully added.";
$content['LN_VIEWS_ERROR_NOCOLUMNS'] = "You need to add at least one column in order to add a new Custom View.";
$content['LN_VIEWS_HASBEENEDIT'] = "The Custom View '%1' has been successfully edited.";
$content['LN_VIEWS_'] = "";

// Custom DBMappings center
$content['LN_DBMP_CENTER'] = "数据映射选项";
$content['LN_DBMP_ID'] = "编号";
$content['LN_DBMP_NAME'] = "数据映射名";
$content['LN_DBMP_DBMAPPINGS'] = "数据映射关系";
$content['LN_DBMP_ADD'] = "添加数据映射关系";
$content['LN_DBMP_EDIT'] = "编辑数据映射关系";
$content['LN_DBMP_DELETE'] = "删除数据映射关系";
$content['LN_DBMP_ERROR_IDNOTFOUND'] = "A Database Mapping with ID '%1' could not be found.";
$content['LN_DBMP_ERROR_INVALIDID'] = "The Database Mapping with ID '%1' is not a valid Database Mapping.";
$content['LN_DBMP_WARNDELETEMAPPING'] = "Are you sure that you want to delete the Database Mapping '%1'? This cannot be undone!";
$content['LN_DBMP_ERROR_DELSEARCH'] = "Deleting of the Database Mapping with id '%1' failed!";
$content['LN_DBMP_ERROR_HASBEENDEL'] = "The Database Mapping '%1' has been successfully deleted!";
$content['LN_DBMP_ADDEDIT'] = "Add / Edit Database Mapping";
$content['LN_DBMP_DBMAPPINGSLIST'] = "Configured Mappings";
$content['LN_DBMP_ADDMAPPING'] = "Add Field Mapping into list";
$content['LN_DBMP_ERROR_DISPLAYNAMEEMPTY'] = "The DisplayName cannot be empty.";
$content['LN_DBMP_MAPPING'] = "Mapping";
$content['LN_DBMP_MAPPING_REMOVE'] = "Remove Mapping";
$content['LN_DBMP_MAPPING_EDIT'] = "Edit Mapping";
$content['LN_DBMP_HASBEENADDED'] = "The Custom Database Mapping '%1' has been successfully added.";
$content['LN_DBMP_ERROR_NOCOLUMNS'] = "You need to add at least one column in order to add a new Custom Database Mapping.";
$content['LN_DBMP_HASBEENEDIT'] = "The Custom Database Mapping '%1' has been successfully edited.";
$content['LN_DBMP_ERROR_MISSINGFIELDNAME'] = "Missing mapping for the '%1' field.";
$content['LN_SOURCES_FILTERSTRING'] = "Custom Searchfilter";
$content['LN_SOURCES_FILTERSTRING_HELP'] = "Use the same syntax as in the search field. For example if you want to show only messages from 'server1', use this searchfilter: source:=server1";

// Custom Sources center
$content['LN_SOURCES_CENTER'] = "来源选项";
$content['LN_SOURCES_EDIT'] = "Edit Source";
$content['LN_SOURCES_DELETE'] = "Delete Source";
$content['LN_SOURCES_ID'] = "ID";
$content['LN_SOURCES_NAME'] = "来源名字";
$content['LN_SOURCES_TYPE'] = "来源类型";
$content['LN_SOURCES_ASSIGNTO'] = "被分配给";
$content['LN_SOURCES_DISK'] = "磁盘文件";
$content['LN_SOURCES_DB'] = "MySQL数据库";
$content['LN_SOURCES_PDO'] = "PDO 数据源";
$content['LN_SOURCES_MONGODB'] = "MongoDB 数据源";
$content['LN_SOURCES_ADD'] = "添加新来源";
$content['LN_SOURCES_ADDEDIT'] = "添加 / 编辑来源";
$content['LN_SOURCES_TYPE'] = "来源类型";
$content['LN_SOURCES_DISKTYPEOPTIONS'] = "Diskfile related Options";
$content['LN_SOURCES_ERROR_MISSINGPARAM'] = "The paramater '%1' is missing.";
$content['LN_SOURCES_ERROR_NOTAVALIDFILE'] = "Failed to open the syslog file '%1'! Check if the file exists and LogAnalyzer has sufficient rights to it";
$content['LN_SOURCES_ERROR_UNKNOWNSOURCE'] = "Unknown Source '%1' detected";
$content['LN_SOURCE_HASBEENADDED'] = "The new Source '%1' has been successfully added.";
$content['LN_SOURCES_EDIT'] = "编辑来源";
$content['LN_SOURCES_ERROR_INVALIDORNOTFOUNDID'] = "The Source-ID is invalid or could not be found.";
$content['LN_SOURCES_ERROR_IDNOTFOUND'] = "The Source-ID could not be found in the database.";
$content['LN_SOURCES_HASBEENEDIT'] = "The Source '%1' has been successfully edited.";
$content['LN_SOURCES_WARNDELETESEARCH'] = "Are you sure that you want to delete the Source '%1'? This cannot be undone!";
$content['LN_SOURCES_ERROR_DELSOURCE'] = "Deleting of the Source with id '%1' failed!";
$content['LN_SOURCES_ERROR_HASBEENDEL'] = "The Source '%1' has been successfully deleted!";
$content['LN_SOURCES_DESCRIPTION'] = "来源描述";
$content['LN_SOURCES_ERROR_INVALIDVALUE'] = "Invalid value for the paramater '%1'.";
$content['LN_SOURCES_STATSNAME'] = "名字";
$content['LN_SOURCES_STATSVALUE'] = "值";
$content['LN_SOURCES_DETAILS'] = "Details for this logstream source";
$content['LN_SOURCES_STATSDETAILS'] = "Statistic details for this logstream source";
$content['LN_SOURCES_ERROR_NOSTATSDATA'] = "Could not find or obtain any stats related information for this logstream source.";
$content['LN_SOURCES_ERROR_NOCLEARSUPPORT'] = "This logstream source does not support deleting data.";
$content['LN_SOURCES_ROWCOUNT'] = "Total Rowcount";
$content['LN_SOURCES_CLEARDATA'] = "The following database maintenance Options are available";
$content['LN_SOURCES_CLEAROPTIONS'] = "Select how you want to clear data.";
$content['LN_SOURCES_CLEARALL'] = "Clear (Delete) all data.";
$content['LN_SOURCES_CLEAR_HELPTEXT'] = "Attention! Be carefull with deleting data, any action performed here can not be undone!";
$content['LN_SOURCES_CLEARSINCE'] = "Clear all data older than ... ";
$content['LN_SOURCES_CLEARDATE'] = "Clear all data which is older than ... ";
$content['LN_SOURCES_CLEARDATA_SEND'] = "Clear selected data range";
$content['LN_SOURCES_ERROR_INVALIDCLEANUP'] = "Invalid Data Cleanup type";
$content['LN_SOURCES_WARNDELETEDATA'] = "Are you sure that you want to clear logdata in the '%1' source? This cannot be undone!";
$content['LN_SOURCES_ERROR_DELDATA'] = "Could not delete data in the '%1' source";
$content['LN_SOURCES_HASBEENDELDATA'] = "Successfully deleted data from the '%1' source, '%2' rows were affected. ";

// Database Upgrade
$content['LN_DBUPGRADE_TITLE'] = "LogAnalyzer Database Update";
$content['LN_DBUPGRADE_DBFILENOTFOUND'] = "The database upgrade file '%1' could not be found in the include folder! Please check if all files were successfully uploaded.";
$content['LN_DBUPGRADE_DBDEFFILESHORT'] = "The database upgrade files where empty or did not contain any SQL Command! Please check if all files were successfully uploaded.";
$content['LN_DBUPGRADE_WELCOME'] = "Welcome to the database upgrade";
$content['LN_DBUPGRADE_BEFORESTART'] = "Before you start upgrading your database, you should create a <b>FULL BACKUP OF YOUR DATABASE</b>. Anything else will be done automatically by the upgrade Script.";
$content['LN_DBUPGRADE_CURRENTINSTALLED'] = "Current Installed Database Version";
$content['LN_DBUPGRADE_TOBEINSTALLED'] = "Do be Installed Database Version";
$content['LN_DBUPGRADE_HASBEENDONE'] = "Database Update has been performed, see the results below";
$content['LN_DBUPGRADE_SUCCESSEXEC'] = "Successfully executed statements";
$content['LN_DBUPGRADE_FAILEDEXEC'] = "Failed statements";
$content['LN_DBUPGRADE_ONESTATEMENTFAILED'] = "At least one statement failed, you may need to correct and fix this issue manually. See error details below";
$content['LN_DBUPGRADE_ERRMSG'] = "Error Message";
$content['LN_DBUPGRADE_ULTRASTATSDBVERSION'] = "LogAnalyzer Database Version";

// Charts Options
$content['LN_CHARTS_CENTER'] = "图表选项";
$content['LN_CHARTS_EDIT'] = "编辑图表";
$content['LN_CHARTS_DELETE'] = "删除图表";
$content['LN_CHARTS_ADD'] = "添加图表";
$content['LN_CHARTS_ADDEDIT'] = "添加 / 编辑图表";
$content['LN_CHARTS_NAME'] = "图表名字";
$content['LN_CHARTS_ENABLED'] = "Chart enabled";
$content['LN_CHARTS_ENABLEDONLY'] = "启用";
$content['LN_CHARTS_ERROR_INVALIDORNOTFOUNDID'] = "The Chart-ID is invalid or could not be found.";
$content['LN_CHARTS_WARNDELETESEARCH'] = "Are you sure that you want to delete the Chart '%1'? This cannot be undone!";
$content['LN_CHARTS_ERROR_DELCHART'] = "Deleting of the Chart with id '%1' failed!";
$content['LN_CHARTS_ERROR_HASBEENDEL'] = "The Chart '%1' has been successfully deleted!";
$content['LN_CHARTS_ERROR_MISSINGPARAM'] = "The paramater '%1' is missing.";
$content['LN_CHARTS_HASBEENADDED'] = "The new Chart '%1' has been successfully added.";
$content['LN_CHARTS_ERROR_IDNOTFOUND'] = "The Chart-ID could not be found in the database.";
$content['LN_CHARTS_HASBEENEDIT'] = "The Chart '%1' has been successfully edited.";
$content['LN_CHARTS_ID'] = "ID";
$content['LN_CHARTS_ASSIGNTO'] = "被分配给";
$content['LN_CHARTS_PREVIEW'] = "Preview Chart in a new Window";
$content['LN_CHARTS_FILTERSTRING'] = "Custom Filter";
$content['LN_CHARTS_FILTERSTRING_HELP'] = "Use the same syntax as in the search field. For example if you want to generate a chart for 'server1', use this filter: source:=server1";
$content['LN_CHARTS_ERROR_CHARTIDNOTFOUND'] = "Error, ChartID with ID '%1' , was not found";
$content['LN_CHARTS_ERROR_SETTINGFLAG'] = "Error setting flag, invalid ChartID or operation.";
$content['LN_CHARTS_SETENABLEDSTATE'] = "Toggle Enabled State";

// Fields Options
$content['LN_FIELDS_CENTER'] = "字段选项";
$content['LN_FIELDS_EDIT'] = "编辑字段";
$content['LN_FIELDS_DELETE'] = "删除字段";
$content['LN_FIELDS_ADD'] = "添加新字段";
$content['LN_FIELDS_ID'] = "字段编号";
$content['LN_FIELDS_NAME'] = "显示名字";
$content['LN_FIELDS_DEFINE'] = "内部字段编号";
$content['LN_FIELDS_DELETE_FROMDB'] = "Delete Field from DB";
$content['LN_FIELDS_ADDEDIT'] = "添加 / 编辑 字段";
$content['LN_FIELDS_TYPE'] = "字段类型";
$content['LN_FIELDS_ALIGN'] = "Listview Alignment";
$content['LN_FIELDS_SEARCHONLINE'] = "开启在线搜索";
$content['LN_FIELDS_DEFAULTWIDTH'] = "Row width in Listview";
$content['LN_FIELDS_ERROR_IDNOTFOUND'] = "The Field-ID could not be found in the database, or in the default constants.";
$content['LN_FIELDS_ERROR_INVALIDID'] = "The Field with ID '%1' is not a valid Field.";
$content['LN_FIELDS_SEARCHFIELD'] = "Name of Searchfilter";
$content['LN_FIELDS_WARNDELETESEARCH'] = "Are you sure that you want to delete the Field '%1'? This cannot be undone!";
$content['LN_FIELDS_ERROR_DELSEARCH'] = "The Field-ID could not be found in the database.";
$content['LN_FIELDS_ERROR_HASBEENDEL'] = "The Field '%1' has been successfully deleted!";
$content['LN_FIELDS_ERROR_FIELDCAPTIONEMPTY'] = "The field caption was empty. ";
$content['LN_FIELDS_ERROR_FIELDIDEMPTY'] = "The field id was empty. ";
$content['LN_FIELDS_ERROR_SEARCHFIELDEMPTY'] = "The searchfilter was empty. ";
$content['LN_FIELDS_ERROR_FIELDDEFINEEMPTY'] = "The internal FieldID was empty. ";
$content['LN_FIELDS_HASBEENEDIT'] = "The configuration for the field '%1' has been successfully edited.";
$content['LN_FIELDS_HASBEENADDED'] = "The configuration for the field '%1' has been successfully added.";
$content['LN_FIELDS_'] = "";
$content['LN_ALIGN_CENTER'] = "居中";
$content['LN_ALIGN_LEFT'] = "靠左";
$content['LN_ALIGN_RIGHT'] = "靠右";
$content['LN_FILTER_TYPE_STRING'] = "String";
$content['LN_FILTER_TYPE_NUMBER'] = "Number";
$content['LN_FILTER_TYPE_DATE'] = "Date";

// Parser Options
$content['LN_PARSERS_EDIT'] = "编辑消息解析器";
$content['LN_PARSERS_DELETE'] = "删除消息解析器";
$content['LN_PARSERS_ID'] = "消息解析器编号";
$content['LN_PARSERS_NAME'] = "消息解析器名字";
$content['LN_PARSERS_DESCRIPTION'] = "消息解析器描述";
$content['LN_PARSERS_ERROR_NOPARSERS'] = "There were no valid message parsers found in your installation. ";
$content['LN_PARSERS_HELP'] = "帮助";
$content['LN_PARSERS_HELP_CLICK'] = "点击这里寻求详细帮助";
$content['LN_PARSERS_INFO'] = "Show more Information for this message parser.";
$content['LN_PARSERS_INIT'] = "Initialize settings for this message parser.";
$content['LN_PARSERS_REMOVE'] = "Remove settings for this message parser.";
$content['LN_PARSERS_ERROR_IDNOTFOUND'] = "There was no message parser with ID '%1' found.";
$content['LN_PARSERS_ERROR_INVALIDID'] = "Invalid message parser id.";
$content['LN_PARSERS_DETAILS'] = "解析器详情";
$content['LN_PARSERS_CUSTOMFIELDS'] = "The following Custom fields are needed by this Message Parser.";
$content['LN_PARSERS_WARNREMOVE'] = "You are about to remove the custom fields needed by the '%1' Message Parser. However you can add these fields again if you change your mind.";
$content['LN_PARSERS_ERROR_HASBEENREMOVED'] = "All settings ('%2' custom fields) for the Message Parser '%1' have been removed. ";
$content['LN_PARSERS_ERROR_HASBEENADDED'] = "All required settings ('%2' custom fields) for the Message Parser '%1' have been added. ";
$content['LN_PARSERS_ERROR_NOFIELDS'] = "The Message Parser '%1' does not have any custom fields to add.";
$content['LN_PARSERSMENU_LIST'] = "已装消息解析器";
$content['LN_PARSERS_ONLINELIST'] = "所有可用解析器";
$content['LN_PARSERS_'] = "";

// Command Line stuff
$content['LN_CMD_NOOP'] = "Operation parameter is missing";
$content['LN_CMD_NOLOGSTREAM'] = "The logstream source parameter is missing";
$content['LN_CMD_LOGSTREAMNOTFOUND'] = "Logstream Source with ID '%1' could not be found in the Database!";
$content['LN_CMD_COULDNOTGETROWCOUNT'] = "Could not obtain rowcount from logstream source '%1'";
$content['LN_CMD_SUBPARAM1MISSING'] = "Subparameter 1 is missing, it should be set to 'all', 'since' or 'date'. For more details see the documentation.";
$content['LN_CMD_WRONGSUBOPORMISSING'] = "Either the sub-operation is wrong, or another parameter is missing";
$content['LN_CMD_FAILEDTOCLEANDATA'] = "Failed to cleandata for the logstream '%1'.";
$content['LN_CMD_CLEANINGDATAFOR'] = "Cleaning data for logstream source '%1'.";
$content['LN_CMD_ROWSFOUND'] = "Successfully connected and found '%1' rows in the logstream source.";
$content['LN_CMD_DELETINGOLDERTHEN'] = "Performing deletion of data entries older then '%1'.";
$content['LN_CMD_DELETEDROWS'] = "Successfully Deleted '%1' rows in the logstream source.'";
$content['LN_CMD_'] = "";

// Report Options
$content['LN_REPORTS_EDIT'] = "编辑报告";
$content['LN_REPORTS_DELETE'] = "删除报告";
$content['LN_REPORTS_REQUIREDFIELDS'] = "报告字段";
$content['LN_REPORTS_ERROR_NOREPORTS'] = "There were no valid reports found in your installation.";
$content['LN_REPORTS_INIT'] = "初始化设置";
$content['LN_REPORTS_REMOVE'] = "删除设置";
$content['LN_REPORTS_ERROR_IDNOTFOUND'] = "There was no report with ID '%1' found.";
$content['LN_REPORTS_ERROR_INVALIDID'] = "Invalid report id.";
$content['LN_REPORTS_DETAILS'] = "报告详细";
$content['LN_REPORTS_WARNREMOVE'] = "You are about to remove the custom settings needed by the '%1' report. However you can add these settings again if you change your mind.";
$content['LN_REPORTS_ERROR_HASBEENREMOVED'] = "All settings for the report '%1' have been removed.";
$content['LN_REPORTS_ERROR_HASBEENADDED'] = "All required settings for the report '%1' have been added.";
$content['LN_REPORTS_ERROR_NOFIELDS'] = "The report '%1' does not have any custom settings which can be added.";
$content['LN_REPORTS_ERROR_REPORTDOESNTNEEDTOBEREMOVED'] = "The report '%1' does not need to be removed or initialized.";
$content['LN_REPORTS_REMOVESAVEDREPORT'] = "Remove Savedreport";
$content['LN_REPORTS_CUSTOMTITLE'] = "报告标题";
$content['LN_REPORTS_CUSTOMCOMMENT'] = "评论 / 描述";
$content['LN_REPORTS_FILTERSTRING'] = "筛选";
$content['LN_REPORTS_OUTPUTFORMAT'] = "输出格式";
$content['LN_REPORTS_OUTPUTTARGET'] = "输出目标";
$content['LN_REPORTS_HASBEENADDED'] = "The Savedreport '%1' has been successfully added.";
$content['LN_REPORTS_HASBEENEDIT'] = "The Savedreport '%1' has been successfully edited.";
$content['LN_REPORTS_SOURCEID'] = "Logstream source";
$content['LN_REPORTS_ERROR_SAVEDREPORTIDNOTFOUND'] = "There was no savedreport with ID '%1' found.";
$content['LN_REPORTS_ERROR_INVALIDSAVEDREPORTID'] = "Invalid savedreport id.";
$content['LN_REPORTS_WARNDELETESAVEDREPORT'] = "Are you sure that you want to delete the savedreport '%1'?";
$content['LN_REPORTS_ERROR_DELSAVEDREPORT'] = "Deleting of the savedreport with id '%1' failed!";
$content['LN_REPORTS_ERROR_HASBEENDEL'] = "The savedreport '%1' has been successfully deleted!";
$content['LN_REPORTS_FILTERLIST'] = "筛选列表";
$content['LN_REPORTS_FILTER'] = "筛选";
$content['LN_REPORTS_ADDFILTER'] = "添加筛选";
$content['LN_REPORTS_FILTER_EDIT'] = "编辑筛选";
$content['LN_REPORTS_FILTER_MOVEUP'] = "往上移动";
$content['LN_REPORTS_FILTER_MOVEDOWN'] = "往下移动";
$content['LN_REPORTS_FILTER_REMOVE'] = "删除筛选";
$content['LN_REPORTS_FILTEREDITOR'] = "筛选编辑";
$content['LN_REPORTS_FILTERSTRING_ONLYEDITIF'] = "Only edit raw filterstring if you know what you are doing! Note if you change the filterstring, any changes made in the Filtereditor will be lost!";
$content['LN_REPORTS_ADVANCEDFILTERS'] = "高级筛选";
$content['LN_REPORTS_ADVANCEDFILTERLIST'] = "List of advanced report filters";
$content['LN_REPORTS_OUTPUTTARGET_DETAILS'] = "Outputtarget Options";
$content['LN_REPORTS_OUTPUTTARGET_FILE'] = "Output Path and Filename";
$content['LN_REPORTS_CRONCMD'] = "Local Report command";
$content['LN_REPORTS_LINKS'] = "Related Links";
$content['LN_REPORTS_INSTALLED'] = "已安装";
$content['LN_REPORTS_NOTINSTALLED'] = "没有安装";
$content['LN_REPORTS_DOWNLOAD'] = "下载链接";
$content['LN_REPORTS_SAMPLELINK'] = "Report Sample";
$content['LN_REPORTS_DETAILSFOR'] = "Details for '%1' report";
$content['LN_REPORTS_PERFORMANCE_WARNING'] = "Logstream Performance Warning";
$content['LN_REPORTS_OPTIMIZE_LOGSTREAMSOURCE'] = "Yes, optimize logstream source!";
$content['LN_REPORTS_OPTIMIZE_INDEXES'] = "The datasource '%1' is not optimized for this report. There is at least one INDEX missing. Creating INDEXES will speedup the report generation. <br><br>Do you want LogAnalyzer to create the necessary INDEXES now? This may take more then a few minutes, so please be patient!";
$content['LN_REPORTS_ERROR_FAILED_CREATE_INDEXES'] = "Failed to create INDEXES for datasource '%1' with error code '%2'";
$content['LN_REPORTS_INDEX_CREATED'] = "Logstream INDEXES created";
$content['LN_REPORTS_INDEX_CREATED_SUCCESS'] = "Successfully created all INDEXES for datasource '%1'.";
$content['LN_REPORTS_OPTIMIZE_TRIGGER'] = "The datasource '%1' does not have a TRIGGER installed to automatically generate the message checksum on INSERT. Creating the TRIGGER will speedup the report generation. <br><br>Do you want LogAnalyzer to create the TRIGGER now? ";
$content['LN_REPORTS_TRIGGER_CREATED'] = "Logstream TRIGGER created";
$content['LN_REPORTS_TRIGGER_CREATED_SUCCESS'] = "Successfully created TRIGGER for datasource '%1'.";
$content['LN_REPORTS_ERROR_FAILED_CREATE_TRIGGER'] = "Failed to create TRIGGER for datasource '%1' with error code '%2'";
$content['LN_REPORTS_CHANGE_CHECKSUM'] = "The Checksum field for datasource '%1' is not set to UNSIGNED INT. To get the report work properly, changing the CHECKSUM field to UNSIGNED INT is necessary! <br><br>Do you want LogAnalyzer to change the CHECKSUM field now? This may take more then a few minutes, so please be patient!";
$content['LN_REPORTS_ERROR_FAILED_CHANGE_CHECKSUM'] = "Failed to change the CHECKSUM field for datasource '%1' with error code '%2'";
$content['LN_REPORTS_CHECKSUM_CHANGED'] = "Checksum field changed";
$content['LN_REPORTS_CHECKSUM_CHANGED_SUCCESS'] = "Successfully changed the Checksum field for datasource '%1'.";
$content['LN_REPORTS_LOGSTREAM_WARNING'] = "Logstream Warning";
$content['LN_REPORTS_ADD_MISSINGFIELDS'] = "The datasource '%1' does not contain all necessary datafields There is at least one FIELD missing. <br><br>Do you want LogAnalyzer to create the missing datafields now?";
$content['LN_REPORTS_ERROR_FAILED_ADDING_FIELDS'] = "Failed adding missing datafields in datasource '%1' with error code '%2'";
$content['LN_REPORTS_FIELDS_CREATED'] = "Added missing datafields";
$content['LN_REPORTS_FIELDS_CREATED_SUCCESS'] = "Successfully added missing datafields for datasource '%1'.";
$content['LN_REPORTS_RECHECKLOGSTREAMSOURCE'] = "Do you want to check the current logstream source again?";
$content['LN_REPORTS_ADDSAVEDREPORT'] = "Add Savedreport and save changes";
$content['LN_REPORTS_EDITSAVEDREPORT'] = "保存更改";
$content['LN_REPORTS_ADDSAVEDREPORTANDRETURN'] = "Add Savedreport and return to reportlist";
$content['LN_REPORTS_EDITSAVEDREPORTANDRETURN'] = "Save changes and return to reportlist";
$content['LN_REPORTS_SOURCE_WARNING'] = "Logstream Source Warning";	
$content['LN_REPORTS_ERROR_FAILED_SOURCE_CHECK'] = "Failed to check the datasource '%1' with error '%2'";
$content['LN_REPORTS_'] = "";


?>
