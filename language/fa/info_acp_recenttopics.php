<?php
/**
 *
 * @package Recent Topics Extension
 * Persian translation by Meis@M Noubari (php-bb.ir)
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original NV Recent Topics by Joas Schilling (nickvergessen)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'RECENT_TOPICS'					=> 'موضوعات اخیر',
	'RECENT_TOPICS_EXPLAIN'			=> 'On this page you can change the settings specific for the Recent Topics extension.<br /><br />Specific forums can be included or excluded by editing the respective forums in your ACP.<br />Also be sure to check your user permissions, which allow users to change some of the settings found below for themselves.',

	'RECENT_TOPICS_LIST'			=> 'نمایش در " موضوعات اخیر"',
	'RECENT_TOPICS_LIST_EXPLAIN'	=> 'فعال سازی نمایش موضوعات این انجمن در افزونه " موضوعات اخیر"',

	'RT_CONFIG'						=> 'پیکربندی',
	'RT_ALT_LOCATION'				=> 'Display in alternative location',
	'RT_ALT_LOCATION_EXP'			=> 'Use alternative location to display recent topics.<br />Not all styles will support this, for prosilver it will be moved to the bottom of the page.',
	'RT_ANTI_TOPICS' 				=> 'موضوعات چشم پوشی شده',
	'RT_ANTI_TOPICS_EXP'			=> 'جداسازی" توسط کاما ", ” (به عنوان مثال: “7,9”)<br />اگر تمایل به چشم پوشی موضوعی ندارید عدد 0 را وارد کنید.',
	'RT_MIN_TOPIC_LEVEL'			=> 'حداقل سطح نوع موضوعات',
	'RT_MIN_TOPIC_LEVEL_EXP'		=> 'حداقل سطح نمایش موضوع برای نمایش را انتخاب کنید. موضوعات بر اساس سطح و اهمیت نمایش داده خواهند شد.<br />(0 = استاندارد, 1 = مهم, 2 = اطلاعیه, 3 =اطلاعیه سراسری)',
	'RT_NUMBER'						=> 'موضوعات اخیر',
	'RT_NUMBER_EXP'					=> 'نمایش تعداد موضوعات در صفحه اصلی تالار',
	'RT_PAGE_NUMBER'				=> 'صفحات موضوعات اخیر',
	'RT_PAGE_NUMBER_EXP'			=> 'جهت نمایش موضوعات بیشتر می توانید از صفحه بندی استفاده کنید. جهت غیر فعال کردن ، کافیست عدد 1 را وارد کنید. چنانچه عدد 0 را وارد کنید تمامی موضوعات انجمن شامل آن خواهد بود که توصیه نمیشود.',
	'RT_PARENTS'					=> 'نمایش انجمن های والد',
	'RT_PARENTS_EXP'				=> 'نمایش انجمن های والد در کنار موضوعات',
	'RT_SORT_START_TIME'			=> 'مرتب سازی بر اساس تاریخ ایجاد',
	'RT_SORT_START_TIME_EXP'		=> 'فعال کردن گزینه  مرتب سازی بر اساس تاریخ ایجاد موضوع ، به جای استفاده از آخرین زمان ارسال',
	'RT_UNREAD_ONLY'				=> 'تنها نمایش موضوعات خوانده نشده',
	'RT_UNREAD_ONLY_EXP'			=> 'فعال سازی جهت نمایش تنها موضوعات خوانده نشده (حتی اگر جدید یا اخیر هم نباشد). این عملکرد شامل تنظیمات مشابه نیز میباشد (چشم پوشی کردن از انجمن ها و موضوعات) در حالت معمولی. توجه: این امکان تنها برای کاربران وارد شده قابل استفاده میباشد; و مهمانان لیست معمولی را خواهند داشت',

	'RT_VIEW_ON'					=> 'نمایش موضوعات مشابه روی:',
));
