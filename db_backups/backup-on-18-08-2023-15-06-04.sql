#
# TABLE STRUCTURE FOR: activity_status
#

DROP TABLE IF EXISTS `activity_status`;

CREATE TABLE `activity_status` (
  `activity_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_status_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`activity_status_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `activity_status` (`activity_status_id`, `activity_status_name`) VALUES (1, 'Started');
INSERT INTO `activity_status` (`activity_status_id`, `activity_status_name`) VALUES (2, 'No Started');
INSERT INTO `activity_status` (`activity_status_id`, `activity_status_name`) VALUES (3, 'In Progress');


#
# TABLE STRUCTURE FOR: assign_regional
#

DROP TABLE IF EXISTS `assign_regional`;

CREATE TABLE `assign_regional` (
  `assign_regional_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `subproject_id` int(11) NOT NULL,
  `assign_date` date NOT NULL,
  PRIMARY KEY (`assign_regional_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `assign_regional` (`assign_regional_id`, `emp_id`, `subproject_id`, `assign_date`) VALUES (2, 55, 6, '2023-07-01');
INSERT INTO `assign_regional` (`assign_regional_id`, `emp_id`, `subproject_id`, `assign_date`) VALUES (3, 41, 11, '2023-07-31');


#
# TABLE STRUCTURE FOR: bill_summary_amount
#

DROP TABLE IF EXISTS `bill_summary_amount`;

CREATE TABLE `bill_summary_amount` (
  `bs_id` int(11) NOT NULL AUTO_INCREMENT,
  `billsummary_id` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `subproject_id` int(11) NOT NULL,
  `sub_sub_project_id` int(11) NOT NULL,
  `grp_id` int(11) NOT NULL,
  PRIMARY KEY (`bs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (1, 3, '0', 2, 2, 1);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (2, 8, '0', 2, 2, 1);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (3, 5, '1', 2, 2, 1);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (4, 6, '0', 2, 2, 1);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (5, 7, '0', 2, 2, 1);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (6, 9, '0', 2, 2, 1);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (7, 10, '0', 2, 2, 1);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (8, 11, '0', 2, 2, 1);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (9, 12, '0', 2, 2, 1);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (10, 13, '0', 2, 2, 1);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (11, 14, '0', 2, 2, 1);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (12, 19, '0', 2, 2, 1);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (13, 3, '0', 2, 2, 2);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (14, 8, '0', 2, 2, 2);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (15, 5, '2', 2, 2, 2);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (16, 6, '0', 2, 2, 2);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (17, 7, '0', 2, 2, 2);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (18, 9, '0', 2, 2, 2);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (19, 10, '0', 2, 2, 2);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (20, 11, '0', 2, 2, 2);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (21, 12, '0', 2, 2, 2);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (22, 13, '0', 2, 2, 2);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (23, 14, '0', 2, 2, 2);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (24, 19, '0', 2, 2, 2);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (25, 20, '30337806208', 6, 5, 1);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (26, 21, '0', 6, 5, 1);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (27, 22, '0', 6, 5, 1);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (28, 23, '0', 6, 5, 1);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (29, 24, '0', 6, 5, 1);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (30, 25, '0', 6, 5, 1);
INSERT INTO `bill_summary_amount` (`bs_id`, `billsummary_id`, `amount`, `subproject_id`, `sub_sub_project_id`, `grp_id`) VALUES (31, 26, '0', 6, 5, 1);


#
# TABLE STRUCTURE FOR: ci_sessions
#

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('vm9532sug310uf8l2ut7jcrnnjm3up90', '58.65.201.165', 1691059891, '__ci_last_regenerate|i:1691059807;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('oi48pdpjbpite5es8b4mkvbnduounp77', '2400:adcc:125:9900:d039:966a:6a83:d5d', 1691062409, '__ci_last_regenerate|i:1691062112;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('shgli6j52hoclmp7ckbld364glo9gmmo', '2400:adcc:125:9900:d039:966a:6a83:d5d', 1691062683, '__ci_last_regenerate|i:1691062465;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('kj0n91v2e3cn007fsb48cssrl8l4pv5j', '2400:adcc:125:9900:f0ad:30ea:e989:85ff', 1691123285, '__ci_last_regenerate|i:1691123277;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('06sqmf18v5q20qckli45lvlff08i5lmg', '2400:adcc:125:9900:dd47:7e2d:b46b:a54d', 1691124272, '__ci_last_regenerate|i:1691124035;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('rguquk9l33dmmet8dkdijba4d2ojuu6l', '2400:adcc:125:9900:f0ad:30ea:e989:85ff', 1691124270, '__ci_last_regenerate|i:1691124258;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('djgm9q6h5l93lalcr1u9k7ahujid2nkc', '2400:adcc:125:9900:dd47:7e2d:b46b:a54d', 1691124411, '__ci_last_regenerate|i:1691124381;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('tjn7o0sc2td6ed2cb7c6f36m3lvktnn3', '2400:adcc:125:9900:f0ad:30ea:e989:85ff', 1691124739, '__ci_last_regenerate|i:1691124563;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e7hpv4m6c49f8bl6and5oep1qon06pjf', '2400:adcc:125:9900:f0ad:30ea:e989:85ff', 1691124913, '__ci_last_regenerate|i:1691124913;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('okpknul942163gni27psh1b3mn7678nk', '2400:adcc:125:9900:dd47:7e2d:b46b:a54d', 1691125253, '__ci_last_regenerate|i:1691125187;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('i6fnnah7f12nm19ssf7q6g3tlo63lt7n', '2400:adcc:125:9900:dd47:7e2d:b46b:a54d', 1691126208, '__ci_last_regenerate|i:1691126031;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('n5sgap394cdp4g27i6onqthptjgfadr0', '2400:adcc:125:9900:dd47:7e2d:b46b:a54d', 1691126721, '__ci_last_regenerate|i:1691126533;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ftnt2b0n6ufo3bqfbu9v7se6gituu0e5', '2400:adcc:125:9900:f0ad:30ea:e989:85ff', 1691126786, '__ci_last_regenerate|i:1691126786;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8gkii58buu13f1rbpfbvac9kc1h5c213', '2400:adcc:125:9900:dd47:7e2d:b46b:a54d', 1691127459, '__ci_last_regenerate|i:1691127223;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('lchdattp8sq781kao7r6ivpvhabd34ef', '2400:adcc:125:9900:f0ad:30ea:e989:85ff', 1691127455, '__ci_last_regenerate|i:1691127386;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('djujlhp7d08mvjt3mjijvcrd7rml30mv', '2400:adcc:125:9900:dd47:7e2d:b46b:a54d', 1691127776, '__ci_last_regenerate|i:1691127590;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('hp5k8a8bt2naggq5hndteqocposqr2dt', '2400:adcc:125:9900:f0ad:30ea:e989:85ff', 1691127881, '__ci_last_regenerate|i:1691127859;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('l9hbol5qtbmck50ulc3j60jkrh50c34m', '154.192.144.10', 1691128214, '__ci_last_regenerate|i:1691127967;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('vm88kgv0fip1589t31eqdfho8fa4e2pq', '58.65.201.165', 1691128678, '__ci_last_regenerate|i:1691128666;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('lc6tto6oku0qtpgjaoq3o15fg5a4a7dg', '154.192.144.10', 1691128856, '__ci_last_regenerate|i:1691128708;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('30dad4rs5rvc5deuk4093pd36nttkstl', '154.192.144.10', 1691129416, '__ci_last_regenerate|i:1691129416;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('smepav64jhama9kdali35ell8c63qi7v', '154.192.144.10', 1691131498, '__ci_last_regenerate|i:1691131203;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('rdavdtjfbnrjj08moa0rrtkugvii1q67', '154.192.144.10', 1691131620, '__ci_last_regenerate|i:1691131600;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('v1jntre6mslhlgfn4pprsqos5qa6j50c', '2400:adcc:140:3700:d99e:c088:a463:cb3b', 1691132545, '__ci_last_regenerate|i:1691132540;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6ja9pm4r35s0271e5d9ls7lfl1ucrc9p', '2400:adcc:140:3700:d99e:c088:a463:cb3b', 1691133436, '__ci_last_regenerate|i:1691133364;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('aprlfvmm6shuue5pp32449hnr8i5pmhi', '2400:adcc:140:3700:d99e:c088:a463:cb3b', 1691134013, '__ci_last_regenerate|i:1691134003;username|s:17:\"mehboob@gmail.com\";userid|s:2:\"26\";empid|s:2:\"31\";groupid|s:1:\"4\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2od2tucf0hjsca7vqmp3tesqt1502s6a', '58.65.201.165', 1691139190, '__ci_last_regenerate|i:1691139161;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('g5dk2iifp5onghc8denfac018eo74dkc', '2400:adcc:125:9900:20fa:dd9d:d20:f213', 1691386418, '__ci_last_regenerate|i:1691386376;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('kgeof8gbt58oj3n7b47f9j71d4ejopol', '2400:adcc:125:9900:20fa:dd9d:d20:f213', 1691386817, '__ci_last_regenerate|i:1691386741;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5l0vee90e9eldjl178uat95tm7kqjbpt', '2400:adcc:125:9900:20fa:dd9d:d20:f213', 1691387767, '__ci_last_regenerate|i:1691387510;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('81dbg9bs3ji6m29c1782lmheha0ehdlf', '2400:adcc:125:9900:20fa:dd9d:d20:f213', 1691387911, '__ci_last_regenerate|i:1691387820;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bfq0ud4dbdadgak1gvbbc43tssnpbr2b', '2400:adcc:125:9900:20fa:dd9d:d20:f213', 1691388346, '__ci_last_regenerate|i:1691388140;username|s:22:\"ghulam_pmcsc@gmail.com\";userid|s:2:\"43\";empid|s:2:\"55\";groupid|s:1:\"3\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('lotb823b4h6sfg2huj43gu3dctgb1k93', '2400:adcc:125:9900:20fa:dd9d:d20:f213', 1691388675, '__ci_last_regenerate|i:1691388625;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6ugk4ks26d1pdp9bn9ijmfs6u2voen8o', '2400:adcc:111:f300:b54b:7a9a:1e57:7998', 1691389124, '__ci_last_regenerate|i:1691389116;username|s:24:\"mis-officer@kpcip.gov.pk\";userid|s:2:\"47\";empid|s:2:\"59\";groupid|s:1:\"4\";cityid|s:1:\"5\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e52c9jcg1e4elm8q1cob2ivfa8sha3eb', '2400:adcc:125:9900:20fa:dd9d:d20:f213', 1691389543, '__ci_last_regenerate|i:1691389543;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('him6640vsj2kcstccbcttkrruj9h26q0', '2400:adcc:125:9900:151d:e58:935f:3ea8', 1691389900, '__ci_last_regenerate|i:1691389880;username|s:17:\"mehboob@gmail.com\";userid|s:2:\"26\";empid|s:2:\"31\";groupid|s:1:\"4\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3psosg8041qlal8np586qcqgbeufqeeu', '2407:d000:503:8b4f:8177:abbc:efc6:de70', 1691392378, '__ci_last_regenerate|i:1691392378;username|s:17:\"mehboob@gmail.com\";userid|s:2:\"26\";empid|s:2:\"31\";groupid|s:1:\"4\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('er3t2md4vk5376eneokvpaomhv9srfa7', '2407:d000:503:8b4f:8177:abbc:efc6:de70', 1691393557, '__ci_last_regenerate|i:1691393550;username|s:17:\"mehboob@gmail.com\";userid|s:2:\"26\";empid|s:2:\"31\";groupid|s:1:\"4\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('n19rhmsh2mcq1f7esrg6hn7mahpun26p', '2407:d000:503:8b4f:8177:abbc:efc6:de70', 1691393592, '__ci_last_regenerate|i:1691393582;username|s:17:\"mehboob@gmail.com\";userid|s:2:\"26\";empid|s:2:\"31\";groupid|s:1:\"4\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bc9d3a6okt4rfp3g7cuecqeq9acgjno6', '2400:adcc:111:f300:b54b:7a9a:1e57:7998', 1691393883, '__ci_last_regenerate|i:1691393883;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8a3emtsp6s89j1mu32mtr5g1splrtf32', '2407:d000:503:8b4f:8177:abbc:efc6:de70', 1691403459, '__ci_last_regenerate|i:1691403444;username|s:17:\"mehboob@gmail.com\";userid|s:2:\"26\";empid|s:2:\"31\";groupid|s:1:\"4\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('86bb682de648885920abf92770da62c7e7ed8281', '192.140.149.26', 1691412176, '__ci_last_regenerate|i:1691412176;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f089c83ff8027bf5c9eac169c5b92c0b9a3bdf22', '192.140.149.26', 1691412223, '__ci_last_regenerate|i:1691412223;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('537072411e9d20a503e59d22fe26dda805e7558d', '47.254.74.59', 1691429247, '__ci_last_regenerate|i:1691429247;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6367654bf61c7c2237ec8c597c9d1add96c72661', '47.88.101.3', 1691429248, '__ci_last_regenerate|i:1691429248;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ecdfbdea70581a9b218be2d123c44930c570b326', '47.88.94.161', 1691429248, '__ci_last_regenerate|i:1691429248;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f3df06586685c67d7665354d108451257c8e9757', '47.251.11.3', 1691429248, '__ci_last_regenerate|i:1691429248;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('80d20226d4773d53658583a1008e8edd5c5a3bf1', '89.104.111.119', 1691431586, '__ci_last_regenerate|i:1691431586;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('24d90c3c9a7646811bfa1aed92b07be648d01523', '45.90.63.76', 1691431586, '__ci_last_regenerate|i:1691431586;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c0b023c27e731f93ecba2a1898bc468f9d723e70', '176.53.221.1', 1691431586, '__ci_last_regenerate|i:1691431586;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6e475a55ee83befba6ea167e525b2d9d19beaf35', '176.53.221.27', 1691431587, '__ci_last_regenerate|i:1691431587;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('551a019a03b52527933c9ed8f8717887e644ec4a', '178.128.209.209', 1691431808, '__ci_last_regenerate|i:1691431808;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a705839b46c32aa149d8e3153151a13ee590b8d2', '47.88.94.159', 1691437219, '__ci_last_regenerate|i:1691437219;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b2239df1573347bb95a7af0e5e6e58bc4e5232ef', '47.251.15.21', 1691437219, '__ci_last_regenerate|i:1691437219;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6fa0c77487a08b22171343d9f53dda1f8234fdea', '47.89.193.239', 1691437219, '__ci_last_regenerate|i:1691437219;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c7490c3882f65abeb99ef274426c536db27fad2d', '47.254.16.187', 1691437220, '__ci_last_regenerate|i:1691437220;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5f781729824b45ea9ffddf9a5313e1a67bc7b455', '47.88.5.56', 1691437220, '__ci_last_regenerate|i:1691437220;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ee191dc26dae574cd8bc87f5253b08932e91345b', '47.89.195.210', 1691437220, '__ci_last_regenerate|i:1691437220;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7645cfec8c5f5742b8a6f509186560f36dd103eb', '47.88.101.3', 1691437220, '__ci_last_regenerate|i:1691437220;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bc339dac9ac500c36b5b331e78e9bc08938da342', '47.251.15.21', 1691437220, '__ci_last_regenerate|i:1691437220;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('817308463ff6463059fc49517eedca3485d84578', '47.88.86.63', 1691437220, '__ci_last_regenerate|i:1691437220;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1264ceb2cf80552fe82def958ace6074c617ade2', '47.251.14.232', 1691437220, '__ci_last_regenerate|i:1691437220;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0f23e26032177bc7de4ab5eb21ec5fa03df3f907', '176.53.222.27', 1691440144, '__ci_last_regenerate|i:1691440144;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7ca340932063f8a7ee7de86f9bd28efe1a96d759', '89.104.100.151', 1691440147, '__ci_last_regenerate|i:1691440147;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('92d0b918314a62ab14276909808703b761812c99', '191.102.149.116', 1691452396, '__ci_last_regenerate|i:1691452396;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3fedcb82a8b1cb0f44ea7029c5ad044a13d582f4', '191.102.149.201', 1691452397, '__ci_last_regenerate|i:1691452397;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7ea8e509ec1c98d4d87febac343c77544a8c21eb', '193.34.74.152', 1691452401, '__ci_last_regenerate|i:1691452397;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('88ea942ab69ad8a5ab5e99a8c86028c6f73a1f6c', '107.191.101.63', 1691454408, '__ci_last_regenerate|i:1691454408;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1f9781e41b5c89a563d3b5cf9f484696ffa3701e', '107.161.17.162', 1691454408, '__ci_last_regenerate|i:1691454408;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('97856d773c5cc4ca49ed94841c6e4e4d3154694d', '107.191.101.63', 1691454408, '__ci_last_regenerate|i:1691454408;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1a38a7f1e256a20350b81493b5bdc652fbecc198', '107.161.17.162', 1691454408, '__ci_last_regenerate|i:1691454408;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1dd57ff4cac7437161fc8038f3be2187e6765c33', '8.36.86.61', 1691455293, '__ci_last_regenerate|i:1691455293;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5eea2061a8d43ac9ab2e384b10188854261862cf', '8.36.86.61', 1691455295, '__ci_last_regenerate|i:1691455295;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3c588f0d9d7224c4d8309bf3f7755290bb8e3681', '104.131.72.24', 1691455576, '__ci_last_regenerate|i:1691455576;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5012ac2bd8b284a524c74cdf3d09ee32a201fa48', '104.131.72.24', 1691455576, '__ci_last_regenerate|i:1691455576;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('61fd3b263304bdc8d189685b473192f985a2079c', '45.139.39.134', 1691459064, '__ci_last_regenerate|i:1691459064;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5d748e207207102a36a1f7972ea20da0c7aac13a', '193.34.73.230', 1691459068, '__ci_last_regenerate|i:1691459068;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3a860f654e277078b956cdae945648138419a0e3', '170.231.251.75', 1691459069, '__ci_last_regenerate|i:1691459069;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d04dff401b6fb44417cbdb43ec3c47dd3605f0ee', '54.197.113.128', 1691459069, '__ci_last_regenerate|i:1691459069;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('01da0c168427bfa0381aac6181695b8a94f254b6', '149.102.146.134', 1691462356, '__ci_last_regenerate|i:1691462356;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('37d86a6fb3462bd00a955c5ae1a79965c70a8d1e', '64.227.73.204', 1691463251, '__ci_last_regenerate|i:1691463251;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7c96fb5b9223e0a9835e39ca4cfa5388e28c7e07', '64.227.73.204', 1691463252, '__ci_last_regenerate|i:1691463252;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0d292c35bddf7f477c382225d6a5f9318dbfb5c8', '17.241.219.11', 1691466314, '__ci_last_regenerate|i:1691466314;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3c75b7fdfb29d7fdf07798cd9554f414a85313df', '17.241.219.11', 1691466314, '__ci_last_regenerate|i:1691466314;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d5d407d64915cd27dfc496614f0d36de50fcdd1d', '75.119.150.85', 1691466873, '__ci_last_regenerate|i:1691466873;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e8d765ed70cf3a560bf9b32d36ec4930a4f13650', '17.241.227.18', 1691466920, '__ci_last_regenerate|i:1691466920;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('91cd8a48777b41b9981c8c84e27bc0882260840e', '17.241.75.12', 1691466947, '__ci_last_regenerate|i:1691466947;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e4243d195f7ee8b289f9a209d2ca962e1e8298b2', '17.241.219.123', 1691467180, '__ci_last_regenerate|i:1691467180;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('dd9a7345ac4b2e6daa1fb1580278e9a789e068c5', '58.65.201.165', 1691468544, '__ci_last_regenerate|i:1691468543;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('63c51177280c0b90b2c53ecc1e83a81f0b5a1633', '58.65.201.165', 1691470622, '__ci_last_regenerate|i:1691470622;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('715d48aca6941b1f818eae8ce0dbb37484a97769', '58.65.201.165', 1691474022, '__ci_last_regenerate|i:1691474022;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('eb093b230d1c1a80d15f7ff5b71adacc0a72f237', '58.65.201.165', 1691475194, '__ci_last_regenerate|i:1691475194;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('35422cfd0763d6ffcfe50bae80feebdacb3f0038', '58.65.201.165', 1691475533, '__ci_last_regenerate|i:1691475533;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5bbaa31acf896c99d67a0f2ad1692eebdcbe568f', '58.65.201.165', 1691475547, '__ci_last_regenerate|i:1691475533;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bc645465dd104d3ca8820abd7662763eb2506ea1', '58.65.201.165', 1691476794, '__ci_last_regenerate|i:1691476794;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0a6122c2c42eedae614a07638dc15e7ae7dfea9f', '58.65.201.165', 1691479312, '__ci_last_regenerate|i:1691479312;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('98384f178b1795cd7c1253db8acb44c9ac8a3788', '182.191.148.208', 1691476837, '__ci_last_regenerate|i:1691476837;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d8d98d926675c3b28687add97c43d20f2fb4cf6f', '182.191.148.208', 1691476837, '__ci_last_regenerate|i:1691476837;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ba2cb8c6f33c607d365f117dd03fa2cc97987129', '58.65.201.165', 1691477454, '__ci_last_regenerate|i:1691477454;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('332419b17735d038f9a5684b69a09f80322ae49d', '58.65.201.165', 1691477764, '__ci_last_regenerate|i:1691477764;username|s:12:\"pp@gmail.com\";userid|s:2:\"38\";empid|s:2:\"50\";groupid|s:1:\"3\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('775b7234355cdfb2658a66b17deb251feb6168ce', '58.65.201.165', 1691480215, '__ci_last_regenerate|i:1691480215;username|s:12:\"pp@gmail.com\";userid|s:2:\"38\";empid|s:2:\"50\";groupid|s:1:\"3\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('316fd2eec1e1d598f98bb23f585e436a646d2c0c', '58.65.201.165', 1691479644, '__ci_last_regenerate|i:1691479644;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1eb48f458cee8da41dfa102f752013d965477f9e', '58.65.201.165', 1691479978, '__ci_last_regenerate|i:1691479978;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bd56965576c535a7f65206b2aec9c8720554cd68', '58.65.201.165', 1691480844, '__ci_last_regenerate|i:1691480844;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('afc99fac43b103e504928014abff61da7ae82e3f', '58.65.201.165', 1691482108, '__ci_last_regenerate|i:1691482108;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('73d7e9da98953d70436389fe9d76679b3041f3f8', '58.65.201.165', 1691480844, '__ci_last_regenerate|i:1691480844;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fd8b199e837b7f1615670ef91e54d1476cafb7ad', '58.65.201.165', 1691482070, '__ci_last_regenerate|i:1691482070;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fb9a1b3c403c7df6bb1bb9f0faaa471d9c33f796', '58.65.201.165', 1691482070, '__ci_last_regenerate|i:1691482070;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('01b1508df3e25ac9e7be81554b8552af631a8b1e', '58.65.201.165', 1691482454, '__ci_last_regenerate|i:1691482454;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('302e3d95e9f63b78d8249f76df7197cd68de2698', '58.65.201.165', 1691485247, '__ci_last_regenerate|i:1691485247;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('79c6e5c15aaa9b07081c3399f8b0504a55623975', '58.65.201.165', 1691491214, '__ci_last_regenerate|i:1691491214;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('02778fce937b390867980f7fbbedf12985fb1a9a', '87.236.176.15', 1691486920, '__ci_last_regenerate|i:1691486919;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ba7b48a8cf60615ca554dcf7c8955dd1b7ca83bf', '58.65.201.165', 1691491523, '__ci_last_regenerate|i:1691491523;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8df65795d0c81ea218e231c96886441d80281b60', '58.65.201.165', 1691491927, '__ci_last_regenerate|i:1691491927;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e32067f6c3b8ef599b900f35ec7d660093a351bc', '58.65.201.165', 1691492344, '__ci_last_regenerate|i:1691492344;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0173aa41b821baea5454b988abdbfc53280752bf', '58.65.201.165', 1691494726, '__ci_last_regenerate|i:1691494726;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a8c2f014452f84f30857fc4903abbca931a8261d', '58.65.201.165', 1691493423, '__ci_last_regenerate|i:1691493423;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1bab829175e71f28f790792c7392f65354b1402f', '58.65.201.165', 1691495370, '__ci_last_regenerate|i:1691495370;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('70da3f81f9423ec73640fa3daee46b83ab329a26', '58.65.201.165', 1691495192, '__ci_last_regenerate|i:1691495192;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e455855c89ce4dd0f948256974eda76c34748b67', '58.65.201.165', 1691495494, '__ci_last_regenerate|i:1691495494;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('158cc12ea0059d6ccefc56b91a9b6fecc60c1790', '58.65.201.165', 1691495808, '__ci_last_regenerate|i:1691495808;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('86ebc0686810785b9d1b705f26a582cc8dbcaec8', '58.65.201.165', 1691495775, '__ci_last_regenerate|i:1691495572;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";msg|s:27:\"Record Saved Successfully!!\";__ci_vars|a:1:{s:3:\"msg\";s:3:\"old\";}');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('03fa08bbc8ecb484d8bd729cd92f1f0b03317b47', '58.65.201.165', 1691496204, '__ci_last_regenerate|i:1691496204;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('dfc08cefd34e2b222abc9abd07da8a02468aa687', '58.65.201.165', 1691496345, '__ci_last_regenerate|i:1691496345;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('cfd12e93ce8d5ac2b26fb0fbd8154e4085974935', '87.236.176.84', 1691498734, '__ci_last_regenerate|i:1691498734;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ad698f3fa29eae49a5e57939bdad45f31c773ea2', '87.236.176.84', 1691498734, '__ci_last_regenerate|i:1691498734;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('36a987023c01e671a25b6f20dab9e9a06e916172', '87.236.176.209', 1691500936, '__ci_last_regenerate|i:1691500936;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('944cd0c81ee20c74ee161510cce35456e2e0afc2', '89.104.111.7', 1691520607, '__ci_last_regenerate|i:1691520607;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d47c87942e22fa9c3b9325b7c2e7152f9b59df8b', '45.90.62.11', 1691520608, '__ci_last_regenerate|i:1691520608;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ed134c84446449d914dcc4fb035f2bbaf0ef6189', '45.90.62.205', 1691527562, '__ci_last_regenerate|i:1691527562;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('814a6095e10e31cfe9671843f52f8bb3f7279b35', '45.90.63.110', 1691527563, '__ci_last_regenerate|i:1691527563;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b549325fae304c9bc286e43eb812b3f8e334ec6d', '206.189.14.219', 1691542342, '__ci_last_regenerate|i:1691542342;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1c46a8122940d839ecab0d19e97d01ec29ef9246', '206.189.14.219', 1691542342, '__ci_last_regenerate|i:1691542342;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0554b2d8ffda86b6a30fed17ce20900519179d92', '165.22.125.222', 1691543773, '__ci_last_regenerate|i:1691543773;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ad0e7405bc9b116580d063d7d13cb5f2446ba9ea', '165.22.125.222', 1691543773, '__ci_last_regenerate|i:1691543773;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a1cd8c88ad52423c3fc8e02720b7efb511e15e6a', '87.236.176.213', 1691551051, '__ci_last_regenerate|i:1691551051;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5feb704076add9fb516ab3663dec918a62545b11', '87.236.176.213', 1691551051, '__ci_last_regenerate|i:1691551051;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('46e993dd88ca2b08127edb9f98dafa2ab4e22e65', '58.65.201.165', 1691556346, '__ci_last_regenerate|i:1691556346;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4fca4165a77346d40ef32d7538331db8786184e6', '58.65.201.165', 1691557144, '__ci_last_regenerate|i:1691557144;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a357d9898a47462700d82d1bd5dd7755c77882d0', '58.65.201.165', 1691557463, '__ci_last_regenerate|i:1691557463;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('28ad03cd1db7d8b4de398d2749e8f4fc06736204', '58.65.201.165', 1691558260, '__ci_last_regenerate|i:1691558260;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3af6404d9663630ff869b5c9a42af164aff208a6', '58.65.201.165', 1691559329, '__ci_last_regenerate|i:1691559329;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8e87abb87c1fba1d8769d1eee6ab7dddc20950e2', '58.65.201.165', 1691559961, '__ci_last_regenerate|i:1691559961;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d5db0fd53be4e89d5e5b9b3f1efc2e9ebac8524a', '58.65.201.165', 1691561070, '__ci_last_regenerate|i:1691561070;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bb5e1fc196cc1432a4ef76b05c6d2b34dadf5367', '154.192.159.12', 1691562681, '__ci_last_regenerate|i:1691562681;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f0e555485cfee838b0edf4b69c2e5e11a2b5bea9', '154.192.159.12', 1691563098, '__ci_last_regenerate|i:1691563098;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3d73f7e32138e4cf24c3fbc807d8b7d5e79803f4', '154.192.159.12', 1691565110, '__ci_last_regenerate|i:1691565110;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f2b562d125c8b1b486561676b4065cab1d7a701f', '58.65.201.165', 1691571423, '__ci_last_regenerate|i:1691571423;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('999c13365091a523da6e4da9ed787093512a1758', '58.65.201.165', 1691566206, '__ci_last_regenerate|i:1691566206;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4be6298f6924c64cba297ecb033cbaaefb7a328e', '58.65.201.165', 1691573286, '__ci_last_regenerate|i:1691573286;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('63e1e76589bb95c09a76150c50e4a7be69f83e71', '89.175.184.250', 1691567989, '__ci_last_regenerate|i:1691567989;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('145b92347b81363335d51c4f59963cd82dcfff77', '89.175.184.250', 1691567998, '__ci_last_regenerate|i:1691567998;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('afb80f3580dcd8527e06f50cffa2dc4bb7234d39', '58.65.201.165', 1691571427, '__ci_last_regenerate|i:1691571423;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('71e329278a23f6b388780c52c5c0a82df2733edc', '58.65.201.165', 1691573734, '__ci_last_regenerate|i:1691573734;username|s:23:\"arshad.babar@cec.org.pk\";userid|s:2:\"49\";empid|s:2:\"61\";groupid|s:1:\"3\";cityid|s:1:\"5\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('64100646b1eea4ce87647d7b73eb9ea2b2841095', '58.65.201.165', 1691575661, '__ci_last_regenerate|i:1691575661;username|s:23:\"arshad.babar@cec.org.pk\";userid|s:2:\"49\";empid|s:2:\"61\";groupid|s:1:\"3\";cityid|s:1:\"5\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('08aabee848083762d41bb96de5156b7ae565f3e1', '58.65.201.165', 1691580342, '__ci_last_regenerate|i:1691580342;username|s:23:\"arshad.babar@cec.org.pk\";userid|s:2:\"49\";empid|s:2:\"61\";groupid|s:1:\"3\";cityid|s:1:\"5\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bd01ca4f3ec681c580a77d9963e2cf19c3173808', '58.65.201.165', 1691580449, '__ci_last_regenerate|i:1691580448;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('41c0a9149d9dfd8b58ad5d1fdb0164f899cc3530', '167.248.133.50', 1691589755, '__ci_last_regenerate|i:1691589755;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('06b87a20dcea61a5414eb7bbdd61286324b9c354', '167.248.133.50', 1691589755, '__ci_last_regenerate|i:1691589755;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('86b326ecb02af98a81ebce8c6a49633228b4d0e5', '167.248.133.184', 1691606276, '__ci_last_regenerate|i:1691606276;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b4186b0a12caa2a14097ae88e1d7264041494756', '167.248.133.184', 1691606276, '__ci_last_regenerate|i:1691606276;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3247eb95709528d14a6a154c13bd0310a7e5446e', '167.248.133.33', 1691613837, '__ci_last_regenerate|i:1691613837;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5ef3b44ae03cadc5f648af28dee7e68f7eac02a6', '167.248.133.33', 1691613838, '__ci_last_regenerate|i:1691613838;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ce60bbc08d02c47ce17e6facdafdc1b812ebbf69', '167.94.138.36', 1691614957, '__ci_last_regenerate|i:1691614957;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('69799a686a3bffdceb276fc8a1c9e941da255fb2', '167.94.138.36', 1691614958, '__ci_last_regenerate|i:1691614958;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('dbf94bcd39fde8fd0aabff745743c26bdb46086d', '167.94.138.33', 1691631610, '__ci_last_regenerate|i:1691631610;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('29c31f01d5c13cc911e744f7b9ce67d8c332ef59', '167.94.138.33', 1691631611, '__ci_last_regenerate|i:1691631611;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c2b85d1ea541ef3b9ff10e11b1f7725ff446877c', '167.94.138.125', 1691633853, '__ci_last_regenerate|i:1691633853;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('039c4227030d0709464847e492570e0821d6cf36', '167.94.138.125', 1691633853, '__ci_last_regenerate|i:1691633853;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5f7186a34b003b133373619d59369bff2b1dda9b', '154.192.159.12', 1691649971, '__ci_last_regenerate|i:1691649971;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a7340f9d717f49fe433427aa487171059639b188', '154.192.159.12', 1691652274, '__ci_last_regenerate|i:1691652274;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('cb777c607ff95c404b309f18ec709080188103a4', '58.65.201.165', 1691652275, '__ci_last_regenerate|i:1691652274;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('257a6d088d97fa49e6a3a618411cc59a55beb7e9', '58.65.201.165', 1691661749, '__ci_last_regenerate|i:1691661749;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('af02468ed6386c81efb17190001dc72a9b2ca250', '58.65.201.165', 1691662076, '__ci_last_regenerate|i:1691662076;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3e89df243c3d3804b2dc050e0572ac3acb9b82a8', '137.226.113.15', 1691662197, '__ci_last_regenerate|i:1691662197;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5fa45f9891daf2f8e0fc894c7fd1f5ec1f812a2c', '137.226.113.15', 1691662197, '__ci_last_regenerate|i:1691662197;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4bcc60ade6b8263fe14ce35b1d0f3afcad948821', '137.226.113.15', 1691662197, '__ci_last_regenerate|i:1691662197;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5934479cea6430cf81e3f6134620b66840019836', '137.226.113.15', 1691662197, '__ci_last_regenerate|i:1691662197;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('877ab7af550a7030580e7eede404c219bc9ce708', '137.226.113.15', 1691662197, '__ci_last_regenerate|i:1691662197;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d61174963a950178955b4d0f75e9807764fcd8fb', '137.226.113.15', 1691662198, '__ci_last_regenerate|i:1691662198;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2a7c4a52e5c5b9edb9c774e6c8afe6fe1a389af0', '137.226.113.15', 1691662204, '__ci_last_regenerate|i:1691662204;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('da0c195c5d18c573dc1a6b401787119a850b7a83', '137.226.113.15', 1691662205, '__ci_last_regenerate|i:1691662205;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a58978db9adbfb5a4b23f230f396f8ac4cc8ba11', '137.226.113.15', 1691662207, '__ci_last_regenerate|i:1691662207;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('61239a187c5e8fbc7ee7fa283310809632f7be0f', '137.226.113.15', 1691662207, '__ci_last_regenerate|i:1691662207;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('cd16d991413be961182369b222c34e338ffe0a3e', '58.65.201.165', 1691662235, '__ci_last_regenerate|i:1691662234;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f11389c345ef49f4c7d9b5e9d02693a379b2fdb1', '58.65.201.165', 1691666818, '__ci_last_regenerate|i:1691666818;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c0124e546678c7245bc5f7179ae848fc084316c1', '58.65.201.165', 1691667162, '__ci_last_regenerate|i:1691667162;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('468940ecb2add11aa21f0628abc5935a86187a5c', '58.65.201.165', 1691667464, '__ci_last_regenerate|i:1691667464;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('dd5fb3ee4bb0ceb42647fd0cd711e6c3d54afa9a', '58.65.201.165', 1691667464, '__ci_last_regenerate|i:1691667464;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('278eaa6e44c6de343b4074d44dde904f7ee68eeb', '154.192.159.12', 1691732634, '__ci_last_regenerate|i:1691732634;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a204190fa34f47fead140f1fc12899073c8ed99d', '154.192.159.12', 1691735437, '__ci_last_regenerate|i:1691735437;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('23edb770d8820c18b97cfb32d5164f24d0383d44', '154.192.159.12', 1691735442, '__ci_last_regenerate|i:1691735437;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6fa356ba86519f0bddd5a2e369af3b37fefbf7fe', '183.129.153.157', 1691742601, '__ci_last_regenerate|i:1691742601;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('025738b15ab88257067879f52de8591640eb790f', '183.129.153.157', 1691742602, '__ci_last_regenerate|i:1691742602;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d01d5294908e8ba1170dfc87f5c4f5a41d078d0b', '58.65.201.165', 1691747899, '__ci_last_regenerate|i:1691747820;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b68027a67dc7b248015489cb0f2038d955e8abed', '154.192.159.12', 1691748851, '__ci_last_regenerate|i:1691748851;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3739932e3f1d6dfc35d633175026a0a7fda4530f', '154.192.159.12', 1691748851, '__ci_last_regenerate|i:1691748851;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6bec4caeb8d79077842780f07e1993bbdc117e90', '183.129.153.157', 1691770707, '__ci_last_regenerate|i:1691770707;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e342eb8a4674dfe67b19022deb7f1fa0bb34535f', '183.129.153.157', 1691770708, '__ci_last_regenerate|i:1691770708;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7d4a5d88c593f62cf70e5d2088ebafb6f92a6613', '149.102.146.134', 1691780313, '__ci_last_regenerate|i:1691780313;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8449b3a9ec2baaedf2cb042b124c9ff35ff60dd8', '149.100.154.15', 1691800609, '__ci_last_regenerate|i:1691800609;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('31a46a6b2af5dd7b0edd1999eb11f13be65dca12', '51.75.133.70', 1691841446, '__ci_last_regenerate|i:1691841446;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('18ae90cc428d10c451de5ba266730bda134d4844', '75.119.150.85', 1691915690, '__ci_last_regenerate|i:1691915690;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('82346edfefb85d01975227897424f99c19a22cef', '159.65.153.49', 1691919090, '__ci_last_regenerate|i:1691919090;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('50eccd9c311e2c81b3e51dd262425c40a89120dd', '159.65.153.49', 1691919091, '__ci_last_regenerate|i:1691919091;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5902c701739b42ad4ba9b4bc164079964e192042', '154.192.159.12', 1692075979, '__ci_last_regenerate|i:1692075979;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4c035d3fdb51b04ba2e905f50a0c7d0c80475c1d', '154.192.159.12', 1692076626, '__ci_last_regenerate|i:1692076626;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('868f7760412f4bde2c4bca3d3ba8c4b3626daaac', '154.192.159.12', 1692076672, '__ci_last_regenerate|i:1692076626;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('aaaacf1fd2f4a82b270102df5ce34975c12d8f8f', '58.65.201.165', 1692078056, '__ci_last_regenerate|i:1692078056;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c2d6cc8bc382b6b1bb29b169681f102cf9d24259', '58.65.201.165', 1692078062, '__ci_last_regenerate|i:1692078062;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('38df6c8a22eeacb959b047399c9a4a5ed4e25851', '154.192.159.12', 1692092328, '__ci_last_regenerate|i:1692092328;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ce8926c92ac5fe8057f93aae11b105bef3434c0b', '58.65.201.165', 1692092695, '__ci_last_regenerate|i:1692092695;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9c24842b79e14f51f8a00f0bc7995a07aa3dd804', '154.192.159.12', 1692096141, '__ci_last_regenerate|i:1692096141;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bcec211b9526511c85da9e794cbebe99fa76b706', '58.65.201.165', 1692093099, '__ci_last_regenerate|i:1692093099;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d7d1dc7d69799cff5de2a8aa8a6c713ca24f06df', '58.65.201.165', 1692093884, '__ci_last_regenerate|i:1692093884;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3bb3692210797c6e09fa26a39ba887562de28be4', '58.65.201.165', 1692094308, '__ci_last_regenerate|i:1692094308;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1ec4cbbcc114d17bc9ec6b8603776bc5f2025cd9', '58.65.201.165', 1692095079, '__ci_last_regenerate|i:1692095079;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c91b701b5cc9724d41c935a411c73096bc28ed77', '58.65.201.165', 1692098573, '__ci_last_regenerate|i:1692098573;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('221e445fa0eb2e4bb1e498e6b983255a1ad84fd0', '154.192.159.12', 1692097103, '__ci_last_regenerate|i:1692097103;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6ae5ad6fa8bac09f76d28c00d19b317d9a504277', '154.192.159.12', 1692097118, '__ci_last_regenerate|i:1692097103;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5c2222425f9c35101d02133cbfd03fcf763d1d38', '58.65.201.165', 1692098574, '__ci_last_regenerate|i:1692098573;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5ccacc8d5969028d44d69de3c5cdf8f1be92bd28', '58.65.201.165', 1692166964, '__ci_last_regenerate|i:1692166964;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('eef0e87aeca9c1807a98ec2a18802a27a27d5384', '154.192.159.12', 1692164184, '__ci_last_regenerate|i:1692164184;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('19adba82314d20b706b0dc9c46593f80753aa6e7', '154.192.159.12', 1692164686, '__ci_last_regenerate|i:1692164686;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bdc34c9fd3dbe2477ac867239a278fd61013fb54', '154.192.159.12', 1692170314, '__ci_last_regenerate|i:1692170314;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b76f2cc0f59abbb0b17c9474839937e9c41efe08', '58.65.201.165', 1692167150, '__ci_last_regenerate|i:1692167150;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9444e11f940a5459a5a88007b7ed559d4a631f42', '154.192.159.12', 1692170768, '__ci_last_regenerate|i:1692170768;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c730a83cf88d36b9d1df7a84cdbecd2b3199e3ba', '154.192.159.12', 1692171255, '__ci_last_regenerate|i:1692171255;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('dbc3115620517a14930033236f0509969f59ce22', '154.192.159.12', 1692171271, '__ci_last_regenerate|i:1692171255;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2c8fe3d8f5f6e75b3c8fbf335498459b9cadcaba', '154.192.159.12', 1692178818, '__ci_last_regenerate|i:1692178585;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d7aea33e5e1816a97775f9ce482406d131c7d02d', '154.192.159.12', 1692253493, '__ci_last_regenerate|i:1692253493;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('dcb1efc26c20add1b82e2e66b8a33638aacefae6', '58.65.201.165', 1692253878, '__ci_last_regenerate|i:1692253878;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('51ab504e7d269356d59341b1877af4b749757499', '58.65.201.165', 1692254202, '__ci_last_regenerate|i:1692254202;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ce69ec58cbf7359abc1515495401fd562795f633', '58.65.201.165', 1692254849, '__ci_last_regenerate|i:1692254849;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('58acb488b3379fc9f938748c7a417b43e652451c', '58.65.201.165', 1692256033, '__ci_last_regenerate|i:1692256033;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5786483334016af060bbcfec3bc63f891790a6ef', '58.65.201.165', 1692256492, '__ci_last_regenerate|i:1692256492;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('331e64c1f018cc1239f84c6e70f4584625086b24', '58.65.201.165', 1692256493, '__ci_last_regenerate|i:1692256492;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('dca8e1aa369fb02d2781e121a5da878b2cbe7e5f', '154.192.159.12', 1692268409, '__ci_last_regenerate|i:1692268409;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8bb961b6cd6b35edb8396f7ade6ad05414c8f1b8', '154.192.159.12', 1692268417, '__ci_last_regenerate|i:1692268409;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ed18d18e086c7c191e228ae5515ada5adaf82bdd', '58.65.201.165', 1692353027, '__ci_last_regenerate|i:1692353027;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7fc67f475e68f080980d9d1764ba79d33e58ee83', '58.65.201.165', 1692353160, '__ci_last_regenerate|i:1692353027;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');


#
# TABLE STRUCTURE FOR: city
#

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO `city` (`city_id`, `city_name`) VALUES (1, 'Peshawar');
INSERT INTO `city` (`city_id`, `city_name`) VALUES (3, 'kohat');
INSERT INTO `city` (`city_id`, `city_name`) VALUES (5, 'Mardan');
INSERT INTO `city` (`city_id`, `city_name`) VALUES (6, 'Abbottabad');
INSERT INTO `city` (`city_id`, `city_name`) VALUES (7, 'Swat');
INSERT INTO `city` (`city_id`, `city_name`) VALUES (8, 'Mingora');


#
# TABLE STRUCTURE FOR: country
#

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `country` (`country_id`, `country_name`) VALUES (1, 'Pakistan');


#
# TABLE STRUCTURE FOR: db_backups
#

DROP TABLE IF EXISTS `db_backups`;

CREATE TABLE `db_backups` (
  `backup_id` int(11) NOT NULL AUTO_INCREMENT,
  `backup_file` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `backup_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`backup_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# TABLE STRUCTURE FOR: department
#

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

INSERT INTO `department` (`department_id`, `department_name`) VALUES (1, 'PMU ');
INSERT INTO `department` (`department_id`, `department_name`) VALUES (2, 'PMCSC ');
INSERT INTO `department` (`department_id`, `department_name`) VALUES (3, 'CIU');
INSERT INTO `department` (`department_id`, `department_name`) VALUES (4, 'ADB');
INSERT INTO `department` (`department_id`, `department_name`) VALUES (18, 'Not Given');
INSERT INTO `department` (`department_id`, `department_name`) VALUES (19, 'cec');


#
# TABLE STRUCTURE FOR: designation
#

DROP TABLE IF EXISTS `designation`;

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL AUTO_INCREMENT,
  `designation_name` varchar(100) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`designation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO `designation` (`designation_id`, `designation_name`, `department_id`) VALUES (1, 'MIS officer', NULL);
INSERT INTO `designation` (`designation_id`, `designation_name`, `department_id`) VALUES (2, 'CLC Specialist', NULL);
INSERT INTO `designation` (`designation_id`, `designation_name`, `department_id`) VALUES (3, 'M&E Specialist', NULL);
INSERT INTO `designation` (`designation_id`, `designation_name`, `department_id`) VALUES (4, 'Planning Engineer', NULL);
INSERT INTO `designation` (`designation_id`, `designation_name`, `department_id`) VALUES (5, 'Chief Engineer', NULL);
INSERT INTO `designation` (`designation_id`, `designation_name`, `department_id`) VALUES (6, 'Not Given', NULL);
INSERT INTO `designation` (`designation_id`, `designation_name`, `department_id`) VALUES (7, 'Project Co-ordinator', NULL);
INSERT INTO `designation` (`designation_id`, `designation_name`, `department_id`) VALUES (8, 'Regional engineer', NULL);
INSERT INTO `designation` (`designation_id`, `designation_name`, `department_id`) VALUES (9, 'engineer', NULL);
INSERT INTO `designation` (`designation_id`, `designation_name`, `department_id`) VALUES (10, 'Director Technical', NULL);
INSERT INTO `designation` (`designation_id`, `designation_name`, `department_id`) VALUES (11, 'Project Director', NULL);
INSERT INTO `designation` (`designation_id`, `designation_name`, `department_id`) VALUES (12, 'Consultant', NULL);
INSERT INTO `designation` (`designation_id`, `designation_name`, `department_id`) VALUES (13, 'Director Finance', NULL);


#
# TABLE STRUCTURE FOR: district
#

DROP TABLE IF EXISTS `district`;

CREATE TABLE `district` (
  `district_id` int(11) NOT NULL AUTO_INCREMENT,
  `district_name` varchar(100) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`district_id`),
  KEY `fk_divID` (`division_id`),
  CONSTRAINT `fk_divID` FOREIGN KEY (`division_id`) REFERENCES `division` (`division_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO `district` (`district_id`, `district_name`, `division_id`) VALUES (1, 'Peshawar', 1);
INSERT INTO `district` (`district_id`, `district_name`, `division_id`) VALUES (2, 'Hangu', 2);
INSERT INTO `district` (`district_id`, `district_name`, `division_id`) VALUES (3, 'Kohat', 2);
INSERT INTO `district` (`district_id`, `district_name`, `division_id`) VALUES (4, 'Mardan', 3);
INSERT INTO `district` (`district_id`, `district_name`, `division_id`) VALUES (5, 'Saidu Shareef', 4);
INSERT INTO `district` (`district_id`, `district_name`, `division_id`) VALUES (6, 'Nowshera', 1);
INSERT INTO `district` (`district_id`, `district_name`, `division_id`) VALUES (7, 'DI Khan', 2);
INSERT INTO `district` (`district_id`, `district_name`, `division_id`) VALUES (8, 'Charsadda', 1);
INSERT INTO `district` (`district_id`, `district_name`, `division_id`) VALUES (9, 'Karak', 2);
INSERT INTO `district` (`district_id`, `district_name`, `division_id`) VALUES (10, 'Abbottabad', 5);
INSERT INTO `district` (`district_id`, `district_name`, `division_id`) VALUES (11, 'Bannu', 2);
INSERT INTO `district` (`district_id`, `district_name`, `division_id`) VALUES (12, 'Swat', 4);


#
# TABLE STRUCTURE FOR: division
#

DROP TABLE IF EXISTS `division`;

CREATE TABLE `division` (
  `division_id` int(11) NOT NULL AUTO_INCREMENT,
  `division_name` varchar(100) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`division_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `division` (`division_id`, `division_name`, `province_id`) VALUES (1, 'Peshawar', 1);
INSERT INTO `division` (`division_id`, `division_name`, `province_id`) VALUES (2, 'Kohat', 1);
INSERT INTO `division` (`division_id`, `division_name`, `province_id`) VALUES (3, 'Mardan', 1);
INSERT INTO `division` (`division_id`, `division_name`, `province_id`) VALUES (4, 'Swat', 1);
INSERT INTO `division` (`division_id`, `division_name`, `province_id`) VALUES (5, 'Hazara', 1);


#
# TABLE STRUCTURE FOR: emp
#

DROP TABLE IF EXISTS `emp`;

CREATE TABLE `emp` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(100) NOT NULL,
  `emp_f_name` varchar(100) NOT NULL,
  `emp_pic` varchar(500) DEFAULT NULL,
  `emp_curr_address` varchar(500) DEFAULT NULL,
  `emp_per_address` varchar(500) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `cnic_id` varchar(15) DEFAULT NULL,
  `geneder` varchar(10) DEFAULT NULL,
  `marital_status` varchar(15) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `personel_no` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `entry_user` varchar(100) DEFAULT NULL,
  `entry_date_time` datetime DEFAULT NULL,
  `update_user` varchar(100) DEFAULT NULL,
  `update_date_time` datetime DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `type_emp` int(1) DEFAULT NULL,
  `emp_status_id` int(1) DEFAULT '1',
  `city_id` int(11) DEFAULT NULL,
  `organization_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`emp_id`),
  KEY `fk_designationID` (`designation_id`),
  KEY `fk_div_emp` (`division_id`),
  KEY `fk_dis_emp` (`district_id`),
  CONSTRAINT `fk_designationID` FOREIGN KEY (`designation_id`) REFERENCES `designation` (`designation_id`),
  CONSTRAINT `fk_dis_emp` FOREIGN KEY (`district_id`) REFERENCES `district` (`district_id`),
  CONSTRAINT `fk_div_emp` FOREIGN KEY (`division_id`) REFERENCES `division` (`division_id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (1, 'admin', '', 'assets/images/avatar-1.png', 'abc', 'xyz', '1990-02-22', '11111', 'male', 'married', '1111', '11111', NULL, 'kif@gmail.com', NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 3);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (27, 'Sameer Ali', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'sameer@gmail.com', NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, 1, 1, 3);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (28, 'Sarmad Shah', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'amekpcip@gmail.com', NULL, NULL, NULL, NULL, 1, 2, NULL, NULL, NULL, 1, 1, 3);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (29, 'Shafiq Muhammad', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'shafiq@gmail.com', NULL, NULL, NULL, NULL, 1, 3, NULL, NULL, NULL, 1, 1, 3);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (30, 'Abid Hayat', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'abidhayat@gmail.com', NULL, NULL, NULL, NULL, 2, 4, NULL, NULL, NULL, 1, 1, 1);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (31, 'Mehboob Alam', '', NULL, 'nill', 'nil', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'mehboob@gmail.com', NULL, NULL, NULL, NULL, 3, 4, NULL, NULL, NULL, 1, 1, 2);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (34, 'ZKB', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0336 9205958', NULL, NULL, 'kifayatullahkhan@gmail.com', NULL, NULL, NULL, NULL, 1, 6, NULL, NULL, NULL, 1, 1, 5);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (35, 'M/S  RELIABLE', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'nill', NULL, NULL, NULL, NULL, 1, 6, NULL, NULL, NULL, 1, 1, 5);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (36, 'M/S  JHK', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'nill', NULL, NULL, NULL, NULL, 18, 6, NULL, NULL, NULL, 1, 1, 5);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (37, 'M/S ZKB', '', NULL, 'nill', 'nil', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'nill', NULL, NULL, NULL, NULL, 18, 6, NULL, NULL, NULL, 1, 1, 5);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (38, 'M/S METRACON', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'nill', NULL, NULL, NULL, NULL, 18, 6, NULL, NULL, NULL, 1, 1, 5);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (39, 'M/S ES BAKU', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'nill', NULL, NULL, NULL, NULL, 18, 6, NULL, NULL, NULL, 1, 1, 5);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (40, 'Salman Ishfaq', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0', NULL, NULL, 's.ishfaq.kpcip@gmail.com', NULL, NULL, NULL, NULL, 4, 7, NULL, NULL, NULL, 1, 1, 4);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (41, 'Yaqoob', '', NULL, 'nill', 'nikk', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'yaqoob@gmail.com', NULL, NULL, NULL, NULL, 2, 8, NULL, NULL, NULL, 1, 3, 6);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (42, 'Mohsin', '', NULL, 'kohat', 'kohat', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'mohsin@gmail.com', NULL, NULL, NULL, NULL, 3, 5, NULL, NULL, NULL, 1, 3, 7);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (43, 'kifayat', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'kifayatullahkhan@gmail.com', NULL, NULL, NULL, NULL, 2, 4, NULL, NULL, NULL, 1, 4, 8);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (44, 'Ihtisham', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'ihtisham@gmail.com', NULL, NULL, NULL, NULL, 3, 2, NULL, NULL, NULL, 1, 4, 9);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (47, 'Abdul Nadeem', '', NULL, '', '', NULL, NULL, 'male', NULL, '03369659561', NULL, NULL, 'kpcip.monitoring@gmail.com', NULL, NULL, NULL, NULL, 1, 3, NULL, NULL, NULL, 1, 1, 3);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (48, 'pk', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'pk@gmail.com', NULL, NULL, NULL, NULL, 2, 6, NULL, NULL, NULL, 1, 3, 6);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (49, 'ck', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'ck@gmail.com', NULL, NULL, NULL, NULL, 3, 6, NULL, NULL, NULL, 1, 3, 7);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (50, 'pp', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'pp@gmail.com', NULL, NULL, NULL, NULL, 2, 6, NULL, NULL, NULL, 1, 1, 1);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (51, 'ck', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'cp@gmail.com', NULL, NULL, NULL, NULL, 3, 6, NULL, NULL, NULL, 1, 1, 2);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (52, 'adb', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'adb@gmail.com', NULL, NULL, NULL, NULL, 4, 6, NULL, NULL, NULL, 1, 1, 4);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (53, 'TTSH', '', NULL, '', '', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'nill@gmail.com', NULL, NULL, NULL, NULL, 1, 6, NULL, NULL, NULL, 1, 1, 5);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (54, 'JTE', '', NULL, '', '', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'jte@gmail.com', NULL, NULL, NULL, NULL, 18, 6, NULL, NULL, NULL, 1, 1, 5);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (55, 'Ghulam Akbar', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'ghulam_pmcsc@gmail.com', NULL, NULL, NULL, NULL, 2, 8, NULL, NULL, NULL, 1, 1, 1);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (56, 'Fakhar Zaman', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'fakhar@gmail.com', NULL, NULL, NULL, NULL, 3, 3, NULL, NULL, NULL, 1, 1, 2);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (57, 'Mia Shakeel', '', NULL, '', '', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'dt@kpcip.gov.pk', NULL, NULL, NULL, NULL, 1, 10, NULL, NULL, NULL, 1, 1, 3);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (58, 'Syed Zaffar Ali shah', '', NULL, '', '', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'pd@kpcip.gov.pk', NULL, NULL, NULL, NULL, 1, 11, NULL, NULL, NULL, 1, 1, 3);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (59, 'Waqas Jan', '', NULL, 'Mardan', 'Mardan', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'mis-officer@kpcip.gov.pk', NULL, NULL, NULL, NULL, 3, 1, NULL, NULL, NULL, 1, 5, 11);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (60, 'Muhammad Khalil Akbar', '', NULL, '', '', NULL, NULL, 'male', NULL, '0310-1333483', NULL, NULL, 'muhammad.khalil@wsscm.org.pk', NULL, NULL, NULL, NULL, 3, 5, NULL, NULL, NULL, 1, 5, 11);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (61, 'Arshad Qayum Babar', '', NULL, 'nill', 'nill', NULL, NULL, 'male', NULL, ' 0333-9107976', NULL, NULL, 'arshad.babar@cec.org.pk', NULL, NULL, NULL, NULL, 2, 12, NULL, NULL, NULL, 1, 5, 10);
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (62, 'Qazi Raees', '', NULL, 'hayatabad', 'hayatabad', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'dfa@kpcip.gov.pk', NULL, NULL, NULL, NULL, 1, 13, NULL, NULL, NULL, 1, 1, 3);


#
# TABLE STRUCTURE FOR: ipac_status
#

DROP TABLE IF EXISTS `ipac_status`;

CREATE TABLE `ipac_status` (
  `ipac_status_id` int(10) unsigned zerofill NOT NULL,
  `ipac_status_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ipac_status_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: ipc_days
#

DROP TABLE IF EXISTS `ipc_days`;

CREATE TABLE `ipc_days` (
  `ipc_days_id` int(11) NOT NULL AUTO_INCREMENT,
  `level_id` int(11) DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  PRIMARY KEY (`ipc_days_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `ipc_days` (`ipc_days_id`, `level_id`, `days`) VALUES (1, 1, 9);
INSERT INTO `ipc_days` (`ipc_days_id`, `level_id`, `days`) VALUES (2, 2, 7);
INSERT INTO `ipc_days` (`ipc_days_id`, `level_id`, `days`) VALUES (3, 3, 5);
INSERT INTO `ipc_days` (`ipc_days_id`, `level_id`, `days`) VALUES (4, 4, 14);


#
# TABLE STRUCTURE FOR: ipc_items
#

DROP TABLE IF EXISTS `ipc_items`;

CREATE TABLE `ipc_items` (
  `ipc_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `ipc_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ipc_item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `ipc_items` (`ipc_item_id`, `item_id`, `ipc_id`) VALUES (1, 1, 1);
INSERT INTO `ipc_items` (`ipc_item_id`, `item_id`, `ipc_id`) VALUES (2, 2, 1);
INSERT INTO `ipc_items` (`ipc_item_id`, `item_id`, `ipc_id`) VALUES (3, 3, 2);


#
# TABLE STRUCTURE FOR: ipc_payment
#

DROP TABLE IF EXISTS `ipc_payment`;

CREATE TABLE `ipc_payment` (
  `ipc_payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `ipc_payment_date` date NOT NULL,
  `ipac_id` int(11) NOT NULL,
  `status_id` int(1) NOT NULL,
  PRIMARY KEY (`ipc_payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `ipc_payment` (`ipc_payment_id`, `ipc_payment_date`, `ipac_id`, `status_id`) VALUES (4, '2023-07-31', 3, 2);
INSERT INTO `ipc_payment` (`ipc_payment_id`, `ipc_payment_date`, `ipac_id`, `status_id`) VALUES (5, '0000-00-00', 4, 0);
INSERT INTO `ipc_payment` (`ipc_payment_id`, `ipc_payment_date`, `ipac_id`, `status_id`) VALUES (6, '0000-00-00', 5, 0);
INSERT INTO `ipc_payment` (`ipc_payment_id`, `ipc_payment_date`, `ipac_id`, `status_id`) VALUES (7, '0000-00-00', 10, 0);


#
# TABLE STRUCTURE FOR: items
#

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(100) DEFAULT NULL,
  `ipc_id` int(11) NOT NULL,
  `status_id` int(1) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `items` (`item_id`, `item_name`, `ipc_id`, `status_id`) VALUES (1, 'abcedf', 0, 0);
INSERT INTO `items` (`item_id`, `item_name`, `ipc_id`, `status_id`) VALUES (2, 'kkk', 1, 0);
INSERT INTO `items` (`item_id`, `item_name`, `ipc_id`, `status_id`) VALUES (3, 'abc', 2, 0);
INSERT INTO `items` (`item_id`, `item_name`, `ipc_id`, `status_id`) VALUES (4, 'fgdfg', 2, 0);
INSERT INTO `items` (`item_id`, `item_name`, `ipc_id`, `status_id`) VALUES (5, 'steel work done', 2, 1);
INSERT INTO `items` (`item_id`, `item_name`, `ipc_id`, `status_id`) VALUES (6, 'Steel ', 3, 1);


#
# TABLE STRUCTURE FOR: menu_admin
#

DROP TABLE IF EXISTS `menu_admin`;

CREATE TABLE `menu_admin` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(100) DEFAULT NULL,
  `menu_url` varchar(100) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `show_in_menu` int(1) DEFAULT NULL,
  `sort_order` int(2) DEFAULT NULL,
  `group_id` int(1) DEFAULT NULL,
  `is_admin` int(1) DEFAULT NULL,
  `module_id` int(11) DEFAULT '0',
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (1, 'General Setting', '#', 0, 1, 8, 1, 1, 2);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (4, 'Groups', 'Welcome/groups', 1, 1, 9, 1, 1, 2);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (6, 'User', 'Welcome/user', 1, 1, 6, 1, 1, 2);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (7, 'Employees & Users', '#', 0, 1, 9, 1, 1, 3);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (11, 'Add New Emp', 'Emp/', 1, 7, 7, 1, 1, 2);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (12, 'Display Emp Records', 'Emp/view_emp', 1, 8, 8, 1, 1, 2);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (13, 'Department', 'Welcome/display_department', 1, 1, 1, 1, 1, 2);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (14, 'Designation', 'Welcome/display_designation', 1, 1, 1, 1, 1, 2);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (15, 'Organization', 'Welcome/display_organization', 1, 1, 3, 1, 1, 2);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (20, 'Projects', 'Complaints/index', 0, 1, 1, 1, 1, 5);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (22, 'Complaints Source', 'Welcome/complaint_source', 7, 1, 3, 1, 1, 0);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (23, 'Complaints Type', 'Welcome/complaint_type', 7, 1, 4, 1, 1, 0);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (25, 'Complaint Status', 'Welcome/complaint_status', 7, 1, 2, 1, 1, 0);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (28, 'Reports', '#', 0, 1, 14, 1, 1, 4);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (29, 'Search By Complaint No', 'Reports/search_complaints', 28, 1, 1, 1, 1, 0);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (35, 'Complaint Sub Status', 'Welcome/complaint_bstatus', 7, 1, 11, 1, 1, 0);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (37, 'Complaints Report', 'Reports/search_complaints_report', 28, 1, 2, 1, 1, 0);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (38, 'Open Enquiry Report', 'Reports/search_oi_report', 28, 1, 3, 1, 1, 0);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (39, 'Fir Report', 'Reports/search_fir_report', 28, 1, 4, 1, 1, 0);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (40, 'Fir Statistics', 'Reports/statistics_fir_report', 28, 1, 5, 1, 1, 0);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (41, 'Recovery Report ', 'Reports/statistics_recovery_report', 28, 1, 6, 1, 1, 0);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (42, 'Duplicate Complaints', 'Complaints/duplicate_complaints', 7, 1, 7, 1, 1, 0);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (43, 'Track Fir', 'Reports/track_fir', 28, 1, 8, 1, 1, 0);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (44, 'Track Complaint', 'Reports/track_complaint', 28, 1, 9, 1, 1, 0);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (45, 'Track Open Enquiry', 'Reports/track_oi', 28, 1, 10, 1, 1, 0);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (46, 'Complaints By Emp', 'Reports/track_emp', 28, 1, 11, 1, 1, 0);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (47, 'PPMS Detail', '#', 0, 1, 3, 1, 1, 1);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (48, 'City', 'Welcome/display_city', 1, 1, 3, 1, 1, 2);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (49, 'Sectors list', 'Welcome/ppms_sectors', 47, 0, 2, 1, 0, 1);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (50, 'Projects list', 'Welcome/ppms_projects', 47, 1, 3, 1, 1, 1);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (51, 'Sub Projects list', 'Welcome/ppms_sub_projects', 47, 1, 4, 1, 1, 1);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (52, 'OutPut list', 'Welcome/ppms', 47, 0, 1, 1, 0, 1);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (54, 'Sub Projects Activity', 'Welcome/ppms_sub_projects_acivity', 47, 0, 6, 1, 0, 1);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (55, 'Sub Projects Assign', 'Welcome/ppms_sub_projects_assign', 47, 1, 5, 1, 1, 1);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (56, 'IPC', 'Welcome/ppms_ipac', 74, 1, 1, 1, 0, 7);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (58, 'IPC Detail', 'Welcome/ipac_detail', 74, 1, 2, 1, 0, 7);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (59, 'View Menus', 'Users/view_admin_menu', 1, 1, 1, 1, 1, 2);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (61, 'Physical CW Progress', 'Welcome/pcp', 0, 1, 1, 1, 1, 1);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (62, 'Sub Projects Assigned RE', 'Welcome/spare', 47, 1, 10, 2, 1, 1);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (63, 'Environment Safeguard', '#', 0, 1, 4, 1, 1, 6);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (64, 'Sub Project Site', 'Enviroment/sub_project_site', 47, 0, 1, 2, 0, 1);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (65, 'Saemer Master', 'Enviroment/saemr_master', 1, 1, 8, 6, 1, 2);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (66, 'External Monitoring', 'Enviroment/external_monitoring_mater', 1, 1, 9, 6, 1, 2);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (67, 'Add Construction Doc', 'Enviroment/construction_documents', 63, 1, 2, 6, 1, 6);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (68, 'Add Saemr Doc', 'Enviroment/saemr_detail', 63, 1, 3, 6, 1, 6);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (69, 'Add Construction Lab test', 'Enviroment/construction_labtest', 63, 1, 4, 6, 1, 6);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (70, 'Add External Monitoring Doc', 'Enviroment/external_monitoring_detail', 63, 1, 5, 5, 1, 6);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (71, 'Add  Environment Approval Doc', 'Enviroment/enviroment_app_doc', 63, 1, 7, 1, 1, 6);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (72, 'Add Environment Staff', 'Enviroment/enviroment_staff', 63, 1, 7, 6, 1, 6);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (73, 'Es Report', 'Enviroment/es_file', 63, 1, 9, 6, 1, 6);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (74, 'IPC Detail', '#', 0, 1, 4, 6, 1, 7);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (75, 'Social SafeGuard', '#', 0, 1, 6, 6, 1, 8);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (79, 'Add SS Detail', 'Enviroment/ss_detail', 75, 1, 1, 6, 1, 8);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (80, 'Add Dps', 'Enviroment/dps', 75, 1, 2, 6, 1, 8);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (81, 'SS Report', 'Enviroment/lap', 75, 1, 3, 6, 1, 8);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (82, 'Procurement', '#', 0, 1, 5, 6, 1, 9);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (83, 'Services', 'Procurement/services', 82, 1, 1, 6, 1, 9);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (84, 'Goods', 'Procurement/goods', 82, 1, 2, 6, 1, 9);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (85, 'Civil Works', 'Procurement/civil_works', 82, 1, 3, 6, 1, 9);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (86, 'Bill Summary', 'Welcome/ppms_bill_summary', 47, 1, 9, 5, 1, 1);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (87, 'Bill Category', 'Welcome/ppms_bill_category', 47, 1, 10, 6, 1, 1);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (88, 'Service Type', 'Procurement/service_type', 82, 1, 1, 6, 1, 9);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (89, 'Service Designation', 'Procurement/service_designation', 82, 1, 2, 6, 1, 9);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (90, 'Gender', 'Procurement/gender', 82, 1, 3, 6, 1, 9);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (91, 'Add New Emp(Service)', 'Procurement/service', 82, 1, 5, 6, 1, 9);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (92, 'Sub Sub Project', 'Welcome/ppms_sub_projects_area', 47, 1, 10, 6, 1, 1);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (93, 'CRM Settings', '#', 0, 1, 12, 6, 1, 10);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (94, 'Complaint Category', 'Crm/cc', 93, 1, 1, 5, 1, 10);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (95, 'Add Tier', 'Crm/Tier', 93, 1, 2, 3, 1, 10);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (96, 'Status', 'Crm/status', 93, 1, 3, 6, 1, 10);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (97, 'Add Zone', 'Crm/Zone', 93, 1, 4, 6, 1, 10);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (98, 'Add Source', 'Crm/source', 93, 1, 5, 6, 1, 10);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (99, 'Tehsil', 'Crm/add_tehsil', 93, 1, 7, 6, 1, 10);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (100, 'Assign Tier', 'Crm/assign_tier', 93, 1, 6, 6, 1, 10);
INSERT INTO `menu_admin` (`menu_id`, `menu_name`, `menu_url`, `parent_id`, `show_in_menu`, `sort_order`, `group_id`, `is_admin`, `module_id`) VALUES (101, 'Database Backup', 'Welcome/backups', 1, 1, 15, 6, 1, 2);


#
# TABLE STRUCTURE FOR: module
#

DROP TABLE IF EXISTS `module`;

CREATE TABLE `module` (
  `module_id` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(100) DEFAULT NULL,
  `sort_by` int(11) NOT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `module` (`module_id`, `module_name`, `sort_by`) VALUES (1, 'PPMS - Modules', 1);
INSERT INTO `module` (`module_id`, `module_name`, `sort_by`) VALUES (2, 'Configuration Settings', 6);
INSERT INTO `module` (`module_id`, `module_name`, `sort_by`) VALUES (3, 'Employee & User Module', 6);
INSERT INTO `module` (`module_id`, `module_name`, `sort_by`) VALUES (4, 'Reports', 7);
INSERT INTO `module` (`module_id`, `module_name`, `sort_by`) VALUES (5, 'Projects', 8);
INSERT INTO `module` (`module_id`, `module_name`, `sort_by`) VALUES (6, 'Environment Safeguard', 3);
INSERT INTO `module` (`module_id`, `module_name`, `sort_by`) VALUES (7, 'IPC Module', 2);
INSERT INTO `module` (`module_id`, `module_name`, `sort_by`) VALUES (8, 'Social SafeGuard', 4);
INSERT INTO `module` (`module_id`, `module_name`, `sort_by`) VALUES (9, 'Procurement Module', 5);
INSERT INTO `module` (`module_id`, `module_name`, `sort_by`) VALUES (10, 'CRM', 7);


#
# TABLE STRUCTURE FOR: month
#

DROP TABLE IF EXISTS `month`;

CREATE TABLE `month` (
  `month_id` int(2) NOT NULL AUTO_INCREMENT,
  `month_name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`month_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO `month` (`month_id`, `month_name`) VALUES (1, 'jan');
INSERT INTO `month` (`month_id`, `month_name`) VALUES (2, 'Feb');
INSERT INTO `month` (`month_id`, `month_name`) VALUES (3, 'March');
INSERT INTO `month` (`month_id`, `month_name`) VALUES (4, 'April');
INSERT INTO `month` (`month_id`, `month_name`) VALUES (5, 'May');
INSERT INTO `month` (`month_id`, `month_name`) VALUES (6, 'June');
INSERT INTO `month` (`month_id`, `month_name`) VALUES (7, 'July');
INSERT INTO `month` (`month_id`, `month_name`) VALUES (8, 'Aug');
INSERT INTO `month` (`month_id`, `month_name`) VALUES (9, 'Sep');
INSERT INTO `month` (`month_id`, `month_name`) VALUES (10, 'Oct');
INSERT INTO `month` (`month_id`, `month_name`) VALUES (11, 'Nov');
INSERT INTO `month` (`month_id`, `month_name`) VALUES (12, 'Dec');


#
# TABLE STRUCTURE FOR: organization
#

DROP TABLE IF EXISTS `organization`;

CREATE TABLE `organization` (
  `organization_id` int(11) NOT NULL AUTO_INCREMENT,
  `organization_name` varchar(100) DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  `order_by` int(11) NOT NULL,
  PRIMARY KEY (`organization_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

INSERT INTO `organization` (`organization_id`, `organization_name`, `city_id`, `order_by`) VALUES (1, 'PMCSC - PESH', 1, 1);
INSERT INTO `organization` (`organization_id`, `organization_name`, `city_id`, `order_by`) VALUES (2, 'CIU - PESH', 1, 2);
INSERT INTO `organization` (`organization_id`, `organization_name`, `city_id`, `order_by`) VALUES (3, 'PMU', 1, 3);
INSERT INTO `organization` (`organization_id`, `organization_name`, `city_id`, `order_by`) VALUES (4, 'ADB', 1, 4);
INSERT INTO `organization` (`organization_id`, `organization_name`, `city_id`, `order_by`) VALUES (5, 'CONTRATCTOR', 0, 0);
INSERT INTO `organization` (`organization_id`, `organization_name`, `city_id`, `order_by`) VALUES (6, 'PMCSC - KOH', 3, 1);
INSERT INTO `organization` (`organization_id`, `organization_name`, `city_id`, `order_by`) VALUES (7, 'CIU - KOH', 3, 2);
INSERT INTO `organization` (`organization_id`, `organization_name`, `city_id`, `order_by`) VALUES (8, 'PMCSC - HANGU', 4, 1);
INSERT INTO `organization` (`organization_id`, `organization_name`, `city_id`, `order_by`) VALUES (9, 'CIU - HANGU', 4, 2);
INSERT INTO `organization` (`organization_id`, `organization_name`, `city_id`, `order_by`) VALUES (10, 'PMCSC - MARDAN', 5, 1);
INSERT INTO `organization` (`organization_id`, `organization_name`, `city_id`, `order_by`) VALUES (11, 'CIU - MARDAN', 5, 2);


#
# TABLE STRUCTURE FOR: permission
#

DROP TABLE IF EXISTS `permission`;

CREATE TABLE `permission` (
  `permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) DEFAULT NULL,
  `flag_id` int(11) DEFAULT NULL,
  `group_id` int(1) DEFAULT NULL,
  PRIMARY KEY (`permission_id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8;

INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (1, 1, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (2, 13, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (3, 14, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (4, 59, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (5, 60, 0, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (6, 15, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (7, 48, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (8, 6, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (9, 11, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (10, 12, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (11, 4, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (12, 47, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (13, 49, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (14, 52, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (15, 50, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (16, 53, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (17, 51, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (18, 54, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (19, 55, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (20, 56, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (21, 58, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (22, 1, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (23, 13, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (24, 14, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (25, 59, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (26, 60, 0, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (27, 15, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (28, 48, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (29, 6, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (30, 11, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (31, 12, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (32, 4, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (33, 47, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (34, 49, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (35, 52, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (36, 50, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (37, 53, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (38, 51, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (39, 54, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (40, 55, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (41, 56, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (42, 58, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (43, 47, 0, 3);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (44, 56, 1, 3);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (45, 58, 1, 3);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (46, 47, 0, 4);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (47, 58, 1, 4);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (48, 7, 0, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (49, 25, 0, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (50, 7, 0, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (51, 25, 0, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (52, 55, 0, 3);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (53, 56, 0, 4);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (54, 47, 0, 5);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (55, 58, 1, 5);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (56, 47, 1, 6);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (57, 58, 1, 6);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (58, 61, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (59, 61, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (60, 62, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (61, 62, 1, 2);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (62, 63, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (64, 65, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (65, 66, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (66, 67, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (67, 68, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (68, 69, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (69, 70, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (70, 71, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (71, 72, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (72, 73, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (73, 64, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (74, 74, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (75, 63, 1, 6);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (76, 73, 1, 6);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (77, 74, 1, 3);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (78, 63, 1, 3);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (79, 73, 1, 3);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (80, 74, 1, 4);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (81, 63, 1, 4);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (82, 73, 1, 4);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (83, 74, 1, 5);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (84, 63, 1, 5);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (85, 73, 1, 5);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (86, 74, 1, 6);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (87, 75, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (88, 76, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (89, 77, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (90, 78, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (91, 79, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (92, 80, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (93, 81, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (94, 82, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (95, 83, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (96, 84, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (97, 85, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (98, 86, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (99, 87, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (100, 88, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (101, 89, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (102, 90, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (103, 91, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (104, 92, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (105, 93, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (106, 94, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (107, 95, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (108, 96, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (109, 97, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (110, 98, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (111, 99, 1, 1);
INSERT INTO `permission` (`permission_id`, `menu_id`, `flag_id`, `group_id`) VALUES (112, 101, 1, 1);


#
# TABLE STRUCTURE FOR: ppms_billsummary
#

DROP TABLE IF EXISTS `ppms_billsummary`;

CREATE TABLE `ppms_billsummary` (
  `billsummary_id` int(11) NOT NULL AUTO_INCREMENT,
  `billsummary_no` varchar(20) DEFAULT NULL,
  `billsummary_desc` text,
  `billsummary_amt` double DEFAULT NULL,
  `billsummary_cw` int(1) DEFAULT NULL,
  `billsummary_category_id` int(11) DEFAULT NULL,
  `subproject_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `sub_sub_project_id` int(11) NOT NULL,
  PRIMARY KEY (`billsummary_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (1, '1', 'Earth Works including Scarfication and excavation', '227052665.93', 1, 1, 10, 1, 1);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (2, '2', 'Pipes and Fittings and Marker Tape', '1535727495.62', 1, 1, 10, 2, 1);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (3, '3', 'Telephone System', '815300', 1, 1, 2, 3, 2);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (4, '6.1', 'Provision,Installation and Commissioning of Energization Solution, as approved by the Employer, for the Compete Lot', '380562047', 1, 2, 10, 4, 1);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (8, '5', 'Sound System', '1735150', 1, 1, 2, 5, 2);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (5, '1', 'Civil Work & Plantation', '15340044207', 1, 1, 2, 1, 2);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (6, '2', 'Internal Electrification', '2204774900', 1, 1, 2, 2, 2);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (7, '4', 'Fire Alarm System & Fire Extinguishers', '2016400', 1, 1, 2, 4, 2);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (9, '6', 'Transformers H T Works', '6882600', 1, 1, 2, 6, 2);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (10, '6a', 'Lift / Elevevator', '9000000', 1, 1, 2, 7, 2);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (11, '6b', 'Diesel Generator 30 (KVA)', '5185096.27', 1, 1, 2, 8, 2);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (12, '6c', 'GIGA Speed Networking System', '4074500', 1, 1, 2, 9, 2);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (13, '6d', 'Water Supply ,Pluming & Sewerage', '6795190', 1, 1, 2, 10, 2);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (14, '6e', 'SUI Gas Installation', '849450', 1, 1, 2, 11, 2);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (15, '1', 'Civil Work & Plantation', '84476375.5', 1, 1, 2, 1, 3);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (16, '2', 'External Electrification', '64210428', 1, 1, 2, 2, 3);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (17, '3', 'Transformers H T Works', '5746335', 1, 1, 2, 3, 3);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (18, '4', 'Provision,Installation and Commissioning of Energization Solution, as approved by the Employer, for the Compete Lot', '15255610.59', 1, 1, 2, 4, 3);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (19, '1', 'Provisional work', '0', 1, 2, 2, 12, 2);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (20, '1', 'Civli work & Plantation', '30337806208', 1, 1, 6, 1, 5);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (21, '2', 'Tube Well', '6120445', 1, 1, 6, 2, 5);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (22, '2a', 'Pumping Machinery', '3330000', 1, 1, 6, 3, 5);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (23, '2b', 'Pumping Chamber', '1298586.5', 1, 1, 6, 4, 5);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (24, '3', 'External Electrification', '50690845', 1, 1, 6, 5, 5);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (25, '3a', 'Transformer H.T Work', '5322640', 1, 1, 6, 6, 5);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (26, '1', 'Provisional Sum', '0', 1, 2, 6, 7, 5);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (27, '01', 'Civil work & Plantation', '578646873.25', 1, 1, 6, 1, 6);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (28, '02', 'Pedestrain Bridge', '10000000', 1, 1, 6, 2, 6);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (29, '03', 'Tube Well', '8600890', 1, 1, 6, 3, 6);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (30, '3a', 'Pumping Machinery', '6660000', 1, 1, 6, 4, 6);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (31, '3b', 'Pumping Chamber', '2597373', 1, 1, 6, 5, 6);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (32, '4', 'Internal Electricfication', '47046133', 1, 1, 6, 6, 6);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (33, '4a', 'Transformer H.T Work', '5335752', 1, 1, 6, 7, 6);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (34, '5', 'Provision, Installation & Commissioning of energization solution, As approved by the employer, for the complete lot(for both parks)', '19102000', 1, 1, 6, 8, 6);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (35, '1', 'Health & Safety (H&S), Environmental Management Plan & Traffic Management', '7464000', 1, 1, 6, 1, 7);


#
# TABLE STRUCTURE FOR: ppms_billsummary_category
#

DROP TABLE IF EXISTS `ppms_billsummary_category`;

CREATE TABLE `ppms_billsummary_category` (
  `billsummary_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `billsummary_category_name` text,
  PRIMARY KEY (`billsummary_category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `ppms_billsummary_category` (`billsummary_category_id`, `billsummary_category_name`) VALUES (1, 'Work');
INSERT INTO `ppms_billsummary_category` (`billsummary_category_id`, `billsummary_category_name`) VALUES (2, 'Provisional Sum');


#
# TABLE STRUCTURE FOR: ppms_es_approval_documents
#

DROP TABLE IF EXISTS `ppms_es_approval_documents`;

CREATE TABLE `ppms_es_approval_documents` (
  `es_aed_id` int(11) NOT NULL AUTO_INCREMENT,
  `es_aed_category_name` varchar(100) DEFAULT NULL,
  `es_aed_document` varchar(100) DEFAULT NULL,
  `es_aed_status` int(11) DEFAULT NULL,
  `sps_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`es_aed_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: ppms_es_construction_doc
#

DROP TABLE IF EXISTS `ppms_es_construction_doc`;

CREATE TABLE `ppms_es_construction_doc` (
  `es_cd_id` int(11) NOT NULL AUTO_INCREMENT,
  `sps_id` int(11) DEFAULT NULL,
  `es_cd_document` varchar(100) DEFAULT NULL,
  `es_cd_date` date DEFAULT NULL,
  `es_cd_status` int(1) DEFAULT NULL,
  `es_cd_title` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`es_cd_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `ppms_es_construction_doc` (`es_cd_id`, `sps_id`, `es_cd_document`, `es_cd_date`, `es_cd_status`, `es_cd_title`) VALUES (1, 1, 'logo-mbm1.png ', '2023-06-15', 1, 'abc');
INSERT INTO `ppms_es_construction_doc` (`es_cd_id`, `sps_id`, `es_cd_document`, `es_cd_date`, `es_cd_status`, `es_cd_title`) VALUES (2, 1, NULL, '2023-06-23', 0, 'testing');


#
# TABLE STRUCTURE FOR: ppms_es_construction_labtest
#

DROP TABLE IF EXISTS `ppms_es_construction_labtest`;

CREATE TABLE `ppms_es_construction_labtest` (
  `es_cit_id` int(11) NOT NULL AUTO_INCREMENT,
  `es_cit_name` varchar(100) DEFAULT NULL,
  `es_cit_document` varchar(100) DEFAULT NULL,
  `es_cit_date` date DEFAULT NULL,
  `es_cit_remarks` text,
  `es_cit_status` int(1) DEFAULT NULL,
  `sps_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`es_cit_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: ppms_es_externalmonitoring
#

DROP TABLE IF EXISTS `ppms_es_externalmonitoring`;

CREATE TABLE `ppms_es_externalmonitoring` (
  `es_em_id` int(11) NOT NULL AUTO_INCREMENT,
  `es_em_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`es_em_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `ppms_es_externalmonitoring` (`es_em_id`, `es_em_name`) VALUES (1, '');


#
# TABLE STRUCTURE FOR: ppms_es_externalmonitoring_detail
#

DROP TABLE IF EXISTS `ppms_es_externalmonitoring_detail`;

CREATE TABLE `ppms_es_externalmonitoring_detail` (
  `es_emd_id` int(11) NOT NULL AUTO_INCREMENT,
  `es_em_id` int(11) DEFAULT NULL,
  `es_emd_status` int(11) DEFAULT NULL,
  `sps_id` int(11) DEFAULT NULL,
  `es_file_attached` varchar(100) DEFAULT NULL,
  `es_file_remarks` text,
  `es_date` date DEFAULT NULL,
  PRIMARY KEY (`es_emd_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: ppms_es_file
#

DROP TABLE IF EXISTS `ppms_es_file`;

CREATE TABLE `ppms_es_file` (
  `es_file_id` int(11) NOT NULL AUTO_INCREMENT,
  `es_file_name` varchar(100) DEFAULT NULL,
  `es_module_id` int(11) DEFAULT NULL,
  `es_userid` int(11) DEFAULT NULL,
  `es_flag` int(11) DEFAULT NULL,
  `es_date` date DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `organization_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`es_file_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: ppms_es_file_attached
#

DROP TABLE IF EXISTS `ppms_es_file_attached`;

CREATE TABLE `ppms_es_file_attached` (
  `attached_id` int(11) DEFAULT NULL,
  `es_module_id` int(11) DEFAULT NULL,
  `attached_date` date DEFAULT NULL,
  `es_userid` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `attached_file` varchar(600) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `ppms_es_file_attached` (`attached_id`, `es_module_id`, `attached_date`, `es_userid`, `id`, `attached_file`) VALUES (NULL, 1, '2023-06-23', NULL, 2, 'jobs.jpg');
INSERT INTO `ppms_es_file_attached` (`attached_id`, `es_module_id`, `attached_date`, `es_userid`, `id`, `attached_file`) VALUES (NULL, 1, '2023-06-23', NULL, 2, 'jobs1.jpg');


#
# TABLE STRUCTURE FOR: ppms_es_forward
#

DROP TABLE IF EXISTS `ppms_es_forward`;

CREATE TABLE `ppms_es_forward` (
  `es_forward_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `es_module_id` int(11) DEFAULT NULL,
  `es_forwarded_date` date DEFAULT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `es_flag` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `es_userid` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  PRIMARY KEY (`es_forward_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: ppms_es_remarks
#

DROP TABLE IF EXISTS `ppms_es_remarks`;

CREATE TABLE `ppms_es_remarks` (
  `es_remarks_id` int(11) NOT NULL AUTO_INCREMENT,
  `es_remarks` text,
  `es_remarks_date` date DEFAULT NULL,
  `es_userid` int(11) DEFAULT NULL,
  `es_module_id` int(11) DEFAULT NULL,
  `es_log` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `sub_sub_project_id` int(11) NOT NULL,
  PRIMARY KEY (`es_remarks_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: ppms_es_saemer
#

DROP TABLE IF EXISTS `ppms_es_saemer`;

CREATE TABLE `ppms_es_saemer` (
  `es_seamr_id` int(11) NOT NULL AUTO_INCREMENT,
  `es_seamr_name` varchar(100) DEFAULT NULL,
  `sps_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`es_seamr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `ppms_es_saemer` (`es_seamr_id`, `es_seamr_name`, `sps_id`) VALUES (1, '1st SAEMR (JAN - JUNE 2022) ', NULL);
INSERT INTO `ppms_es_saemer` (`es_seamr_id`, `es_seamr_name`, `sps_id`) VALUES (2, '', NULL);


#
# TABLE STRUCTURE FOR: ppms_es_saemr_detail
#

DROP TABLE IF EXISTS `ppms_es_saemr_detail`;

CREATE TABLE `ppms_es_saemr_detail` (
  `es_sd_id` int(11) NOT NULL AUTO_INCREMENT,
  `es_seamr_id` int(11) DEFAULT NULL,
  `es_status` int(11) DEFAULT NULL,
  `sps_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`es_sd_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `ppms_es_saemr_detail` (`es_sd_id`, `es_seamr_id`, `es_status`, `sps_id`) VALUES (1, 1, 1, 1);


#
# TABLE STRUCTURE FOR: ppms_es_staff
#

DROP TABLE IF EXISTS `ppms_es_staff`;

CREATE TABLE `ppms_es_staff` (
  `es_staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `es_staff_name` varchar(100) DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `es_staff_status` int(11) DEFAULT NULL,
  `sps_id` int(11) DEFAULT NULL,
  KEY `es_staff_id` (`es_staff_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: ppms_forward_internal
#

DROP TABLE IF EXISTS `ppms_forward_internal`;

CREATE TABLE `ppms_forward_internal` (
  `ifd_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `forward_date` date DEFAULT NULL,
  `from_desig_id` int(11) DEFAULT NULL,
  `to_desig_id` int(11) DEFAULT NULL,
  `flag_id` int(1) DEFAULT NULL,
  `ipc_id` int(11) DEFAULT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ifd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `ppms_forward_internal` (`ifd_id`, `forward_date`, `from_desig_id`, `to_desig_id`, `flag_id`, `ipc_id`, `datetime`) VALUES (1, '2023-08-15', NULL, 1, 0, 10, '2023-08-15 04:44:05');
INSERT INTO `ppms_forward_internal` (`ifd_id`, `forward_date`, `from_desig_id`, `to_desig_id`, `flag_id`, `ipc_id`, `datetime`) VALUES (2, '2023-08-15', NULL, 10, 0, 10, '2023-08-15 04:44:05');
INSERT INTO `ppms_forward_internal` (`ifd_id`, `forward_date`, `from_desig_id`, `to_desig_id`, `flag_id`, `ipc_id`, `datetime`) VALUES (3, '2023-08-15', NULL, 2, 0, 10, '2023-08-15 04:45:13');
INSERT INTO `ppms_forward_internal` (`ifd_id`, `forward_date`, `from_desig_id`, `to_desig_id`, `flag_id`, `ipc_id`, `datetime`) VALUES (4, '2023-08-17', NULL, 11, 1, 10, '2023-08-17 02:09:37');


#
# TABLE STRUCTURE FOR: ppms_gender_tbl
#

DROP TABLE IF EXISTS `ppms_gender_tbl`;

CREATE TABLE `ppms_gender_tbl` (
  `gender_id` int(11) NOT NULL AUTO_INCREMENT,
  `gender_name` varchar(50) NOT NULL,
  PRIMARY KEY (`gender_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: ppms_ipac
#

DROP TABLE IF EXISTS `ppms_ipac`;

CREATE TABLE `ppms_ipac` (
  `ipac_id` int(11) NOT NULL AUTO_INCREMENT,
  `ipac_amount` double DEFAULT NULL,
  `subproject_id` int(11) DEFAULT NULL,
  `ipac_submitted_date` date DEFAULT NULL,
  `ipc_no` varchar(100) NOT NULL,
  `sub_sub_project_id` int(11) NOT NULL,
  `certificate_type` varchar(500) NOT NULL,
  PRIMARY KEY (`ipac_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `ppms_ipac` (`ipac_id`, `ipac_amount`, `subproject_id`, `ipac_submitted_date`, `ipc_no`, `sub_sub_project_id`, `certificate_type`) VALUES (3, '217879515.93', 6, '2023-03-07', 'IPC - 01', 5, 'IPA/IPC');
INSERT INTO `ppms_ipac` (`ipac_id`, `ipac_amount`, `subproject_id`, `ipac_submitted_date`, `ipc_no`, `sub_sub_project_id`, `certificate_type`) VALUES (5, '378631141.44', 6, '2023-06-16', 'IPC 02', 0, 'IPA/IPC');
INSERT INTO `ppms_ipac` (`ipac_id`, `ipac_amount`, `subproject_id`, `ipac_submitted_date`, `ipc_no`, `sub_sub_project_id`, `certificate_type`) VALUES (10, '225705079', 11, '2023-06-19', 'IPC 02', 0, 'IPA/IPC');


#
# TABLE STRUCTURE FOR: ppms_ipac_file
#

DROP TABLE IF EXISTS `ppms_ipac_file`;

CREATE TABLE `ppms_ipac_file` (
  `ipac_file_id` int(11) NOT NULL AUTO_INCREMENT,
  `ipac_file_name` varchar(100) DEFAULT NULL,
  `ipac_file_url` varchar(100) DEFAULT NULL,
  `ipac_id` int(11) DEFAULT NULL,
  `ipac_user_id` int(11) DEFAULT NULL,
  `sub_sub_project_id` int(11) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `ipac_remarks_id` int(11) NOT NULL,
  PRIMARY KEY (`ipac_file_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

INSERT INTO `ppms_ipac_file` (`ipac_file_id`, `ipac_file_name`, `ipac_file_url`, `ipac_id`, `ipac_user_id`, `sub_sub_project_id`, `file_name`, `ipac_remarks_id`) VALUES (5, 'IPC-1 Certificate.pdf', 'IPC-1 Certificate.pdf', 3, 57, 0, 'IPC 01 Certificates', 6);
INSERT INTO `ppms_ipac_file` (`ipac_file_id`, `ipac_file_name`, `ipac_file_url`, `ipac_id`, `ipac_user_id`, `sub_sub_project_id`, `file_name`, `ipac_remarks_id`) VALUES (8, 'IPC-2 (Certificate).pdf', 'IPC-2 (Certificate).pdf', 5, 1, 0, 'IPC 02 Certificate', 13);


#
# TABLE STRUCTURE FOR: ppms_ipac_forward
#

DROP TABLE IF EXISTS `ppms_ipac_forward`;

CREATE TABLE `ppms_ipac_forward` (
  `ipac_forward_id` int(11) NOT NULL AUTO_INCREMENT,
  `ipac_id` int(11) DEFAULT NULL,
  `ipac_forward_date` date DEFAULT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `flag_id` int(1) DEFAULT NULL,
  `status_id` int(1) DEFAULT NULL COMMENT '0 recived,1 forward,2 in progress,3 rejected',
  `sub_sub_project_id` int(11) NOT NULL,
  PRIMARY KEY (`ipac_forward_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (11, 3, '2023-03-07', 1, 55, 0, 0, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (12, 3, '2023-03-24', 1, 55, 0, 1, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (13, 3, '2023-03-24', 3, 55, 0, 2, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (14, 3, '2023-03-28', 3, 57, 0, 1, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (15, 3, '2023-03-28', 2, 57, 0, 2, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (16, 3, '2023-04-17', 2, 31, 0, 1, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (17, 3, '2023-04-17', 3, 31, 0, 2, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (18, 3, '2023-04-17', 3, 1, 0, 1, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (19, 3, '2023-07-29', 4, 1, 0, 2, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (20, 3, '2023-07-31', 4, 40, 0, 4, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (21, 3, '2023-07-31', 3, 40, 1, 4, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (31, 5, '2023-06-16', 1, 55, 0, 0, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (33, 5, '2023-06-27', 1, 55, 0, 1, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (34, 5, '2023-06-27', 3, 55, 1, 2, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (37, 10, '2023-06-19', 6, 41, 0, 0, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (38, 10, '2023-08-01', 6, 41, 0, 1, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (39, 10, '2023-08-01', 3, 41, 0, 2, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (40, 10, '2023-08-01', 3, 57, 0, 1, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (41, 10, '2023-08-01', 7, 57, 0, 2, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (42, 10, '2023-08-01', 7, 42, 0, 1, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (43, 10, '2023-08-01', 3, 42, 1, 2, 0);


#
# TABLE STRUCTURE FOR: ppms_ipac_remarks
#

DROP TABLE IF EXISTS `ppms_ipac_remarks`;

CREATE TABLE `ppms_ipac_remarks` (
  `ipac_remarks_id` int(11) NOT NULL AUTO_INCREMENT,
  `ipac_id` int(11) DEFAULT NULL,
  `ipac_remark` longtext,
  `ipac_remark_date` date DEFAULT NULL,
  `ipac_remark_userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`ipac_remarks_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

INSERT INTO `ppms_ipac_remarks` (`ipac_remarks_id`, `ipac_id`, `ipac_remark`, `ipac_remark_date`, `ipac_remark_userid`) VALUES (5, 3, 'IPA Submitted ', '2023-03-07', 55);
INSERT INTO `ppms_ipac_remarks` (`ipac_remarks_id`, `ipac_id`, `ipac_remark`, `ipac_remark_date`, `ipac_remark_userid`) VALUES (6, 3, 'yes', '0000-00-00', 57);
INSERT INTO `ppms_ipac_remarks` (`ipac_remarks_id`, `ipac_id`, `ipac_remark`, `ipac_remark_date`, `ipac_remark_userid`) VALUES (8, 5, 'IPA Submitted', '2023-06-16', 55);
INSERT INTO `ppms_ipac_remarks` (`ipac_remarks_id`, `ipac_id`, `ipac_remark`, `ipac_remark_date`, `ipac_remark_userid`) VALUES (12, 10, 'IPA Submitted', '2023-06-19', 41);
INSERT INTO `ppms_ipac_remarks` (`ipac_remarks_id`, `ipac_id`, `ipac_remark`, `ipac_remark_date`, `ipac_remark_userid`) VALUES (13, 3, 'yes ', '0000-00-00', 1);
INSERT INTO `ppms_ipac_remarks` (`ipac_remarks_id`, `ipac_id`, `ipac_remark`, `ipac_remark_date`, `ipac_remark_userid`) VALUES (14, 3, 'working', '2023-08-08', 1);


#
# TABLE STRUCTURE FOR: ppms_ipc_billsummary
#

DROP TABLE IF EXISTS `ppms_ipc_billsummary`;

CREATE TABLE `ppms_ipc_billsummary` (
  `ipc_billsummary_id` int(11) NOT NULL AUTO_INCREMENT,
  `billsummary_id` int(11) DEFAULT NULL,
  `ipc_bs_amount` double DEFAULT NULL,
  `ipc_id` int(11) DEFAULT NULL,
  `subproject_id` int(11) NOT NULL,
  `sub_subproject_id` int(11) NOT NULL,
  PRIMARY KEY (`ipc_billsummary_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (1, 1, '1', 1, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (2, 2, '2', 1, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (3, 3, '3', 1, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (4, 4, '3', 1, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (5, 5, '1', 1, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (6, 6, '2', 1, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (7, 3, '3', 1, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (8, 7, '4', 1, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (9, 8, '5', 1, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (10, 9, '6', 1, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (11, 10, '8', 1, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (12, 11, '9', 1, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (13, 12, '12', 1, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (14, 13, '111', 1, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (15, 14, '1', 1, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (16, 19, '12', 1, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (17, 1, '10', 2, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (18, 2, '1200', 2, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (19, 4, '1000', 2, 0, 0);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (20, 20, '97787235.76', 3, 6, 5);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (21, 27, '12009228016', 3, 6, 6);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (22, 35, '0', 3, 6, 7);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (23, 28, '0', 3, 6, 6);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (24, 21, '0', 3, 6, 5);


#
# TABLE STRUCTURE FOR: ppms_output_list
#

DROP TABLE IF EXISTS `ppms_output_list`;

CREATE TABLE `ppms_output_list` (
  `output_id` int(11) NOT NULL AUTO_INCREMENT,
  `output_name` varchar(100) DEFAULT NULL,
  `output_percentage` double DEFAULT NULL,
  `output_amount` double DEFAULT NULL,
  PRIMARY KEY (`output_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO `ppms_output_list` (`output_id`, `output_name`, `output_percentage`, `output_amount`) VALUES (1, 'Output 1', '95.81', '503');
INSERT INTO `ppms_output_list` (`output_id`, `output_name`, `output_percentage`, `output_amount`) VALUES (2, 'Output 2', '3.33', '17.497');
INSERT INTO `ppms_output_list` (`output_id`, `output_name`, `output_percentage`, `output_amount`) VALUES (3, 'Output 3', '0.85', '4.485');


#
# TABLE STRUCTURE FOR: ppms_project
#

DROP TABLE IF EXISTS `ppms_project`;

CREATE TABLE `ppms_project` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(100) DEFAULT NULL,
  `project_percentage` double DEFAULT NULL,
  `project_amount` double DEFAULT NULL,
  `sector_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `ppms_project` (`project_id`, `project_name`, `project_percentage`, `project_amount`, `sector_id`) VALUES (1, 'CW - 03', '40', '100', 2);
INSERT INTO `ppms_project` (`project_id`, `project_name`, `project_percentage`, `project_amount`, `sector_id`) VALUES (2, 'CW - 02', '90', '10', 1);
INSERT INTO `ppms_project` (`project_id`, `project_name`, `project_percentage`, `project_amount`, `sector_id`) VALUES (3, 'CW - 01', '50', '100', 4);
INSERT INTO `ppms_project` (`project_id`, `project_name`, `project_percentage`, `project_amount`, `sector_id`) VALUES (4, 'CW - 04', '52', '100', 1);


#
# TABLE STRUCTURE FOR: ppms_project_activity
#

DROP TABLE IF EXISTS `ppms_project_activity`;

CREATE TABLE `ppms_project_activity` (
  `project_activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_activity_name` mediumtext,
  `project_activity_text` longtext,
  `project_planned` varchar(100) DEFAULT NULL,
  `planned_unit` varchar(20) NOT NULL,
  `project_achieved` varchar(100) DEFAULT NULL,
  `achieved_unit` varchar(20) NOT NULL,
  `project_activity_startdate` date DEFAULT NULL,
  `project_activity_enddate` date DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `suggestion_text` varchar(200) NOT NULL,
  `activity_amount` double NOT NULL,
  `status_id` int(1) NOT NULL,
  `subproject_id` int(11) NOT NULL,
  PRIMARY KEY (`project_activity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `ppms_project_activity` (`project_activity_id`, `project_activity_name`, `project_activity_text`, `project_planned`, `planned_unit`, `project_achieved`, `achieved_unit`, `project_activity_startdate`, `project_activity_enddate`, `project_id`, `suggestion_text`, `activity_amount`, `status_id`, `subproject_id`) VALUES (2, 'Water Reservoirs', 'Total 34 ', '34', 'Km', '10', 'Km', '2023-05-26', '2023-05-27', 2, 'Reconstruction:33, Rehabilitation :1', '125', 3, 10);
INSERT INTO `ppms_project_activity` (`project_activity_id`, `project_activity_name`, `project_activity_text`, `project_planned`, `planned_unit`, `project_achieved`, `achieved_unit`, `project_activity_startdate`, `project_activity_enddate`, `project_id`, `suggestion_text`, `activity_amount`, `status_id`, `subproject_id`) VALUES (3, 'Tubewells', 'Total rebore are 41', '41', '', '20', '', '2023-07-25', '2024-07-25', 2, 'Rebore:41, New:0', '350', 2, 10);
INSERT INTO `ppms_project_activity` (`project_activity_id`, `project_activity_name`, `project_activity_text`, `project_planned`, `planned_unit`, `project_achieved`, `achieved_unit`, `project_activity_startdate`, `project_activity_enddate`, `project_id`, `suggestion_text`, `activity_amount`, `status_id`, `subproject_id`) VALUES (4, 'Water Supply Pipes', 'Associated with OHRs', '155', '', '100', '', '2023-05-26', '2024-07-26', 2, 'Associated with OHRs', '380', 2, 10);
INSERT INTO `ppms_project_activity` (`project_activity_id`, `project_activity_name`, `project_activity_text`, `project_planned`, `planned_unit`, `project_achieved`, `achieved_unit`, `project_activity_startdate`, `project_activity_enddate`, `project_id`, `suggestion_text`, `activity_amount`, `status_id`, `subproject_id`) VALUES (5, 'Tube Well Solarization', 'Tube Well Solarization', '64', '', '50', '', '2023-05-04', '2025-02-28', 2, 'Total:64', '600', 1, 10);


#
# TABLE STRUCTURE FOR: ppms_sector
#

DROP TABLE IF EXISTS `ppms_sector`;

CREATE TABLE `ppms_sector` (
  `sector_id` int(11) NOT NULL AUTO_INCREMENT,
  `sector_name` varchar(100) DEFAULT NULL,
  `output_id` int(11) DEFAULT NULL,
  `sector_percentage` double DEFAULT NULL,
  `sector_amount` double DEFAULT NULL,
  PRIMARY KEY (`sector_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `ppms_sector` (`sector_id`, `sector_name`, `output_id`, `sector_percentage`, `sector_amount`) VALUES (1, 'Water Supply', 1, '50', '100');
INSERT INTO `ppms_sector` (`sector_id`, `sector_name`, `output_id`, `sector_percentage`, `sector_amount`) VALUES (2, 'Sewerage  System ', 1, '12', '200');
INSERT INTO `ppms_sector` (`sector_id`, `sector_name`, `output_id`, `sector_percentage`, `sector_amount`) VALUES (3, 'Solid Waste Management', 1, '25', '100');
INSERT INTO `ppms_sector` (`sector_id`, `sector_name`, `output_id`, `sector_percentage`, `sector_amount`) VALUES (4, 'Urban Green Space Initiatives', 1, '35', '100');


#
# TABLE STRUCTURE FOR: ppms_service_designation_tbl
#

DROP TABLE IF EXISTS `ppms_service_designation_tbl`;

CREATE TABLE `ppms_service_designation_tbl` (
  `sd_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `std_position` varchar(50) NOT NULL,
  `d_id` int(11) NOT NULL,
  PRIMARY KEY (`sd_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: ppms_service_tbl
#

DROP TABLE IF EXISTS `ppms_service_tbl`;

CREATE TABLE `ppms_service_tbl` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_fullname` varchar(50) NOT NULL,
  `emp_no` varchar(50) NOT NULL,
  `s_contract_award_date` date NOT NULL,
  `s_contract_end_date` date NOT NULL,
  `s_contact_no` varchar(50) NOT NULL,
  `d_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `cnic` varchar(50) NOT NULL,
  `gender` int(11) NOT NULL,
  `gender_id` int(11) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `std_id` int(11) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: ppms_service_type_tbl
#

DROP TABLE IF EXISTS `ppms_service_type_tbl`;

CREATE TABLE `ppms_service_type_tbl` (
  `std_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_name` varchar(50) NOT NULL,
  PRIMARY KEY (`std_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: ppms_subproject
#

DROP TABLE IF EXISTS `ppms_subproject`;

CREATE TABLE `ppms_subproject` (
  `subproject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subproject_start_date` date DEFAULT NULL,
  `subproject_end_date` date DEFAULT NULL,
  `subproject_name` varchar(100) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `subproject_percentage` double DEFAULT NULL,
  `subproject_amount` double DEFAULT NULL,
  `subproject_acceptancedate` date DEFAULT NULL,
  `subproject_commencedate` date DEFAULT NULL,
  `detail` text NOT NULL,
  `mobilization_advance` varchar(3) NOT NULL,
  `mobilization_advance_amount` double NOT NULL,
  PRIMARY KEY (`subproject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO `ppms_subproject` (`subproject_id`, `subproject_start_date`, `subproject_end_date`, `subproject_name`, `project_id`, `city_id`, `subproject_percentage`, `subproject_amount`, `subproject_acceptancedate`, `subproject_commencedate`, `detail`, `mobilization_advance`, `mobilization_advance_amount`) VALUES (1, '2022-06-27', '2024-04-19', 'Lot - 01', 3, 6, '3', '1174.98', '2022-11-25', '2023-05-29', 'The pedestrianization of Market in Old City Centre & Urban Green Space Initiatives – Sherwan Adventure Family Park.                                             \r\n                                                \r\n                                                \r\n                                                \r\n                                                ', 'Yes', '281');
INSERT INTO `ppms_subproject` (`subproject_id`, `subproject_start_date`, `subproject_end_date`, `subproject_name`, `project_id`, `city_id`, `subproject_percentage`, `subproject_amount`, `subproject_acceptancedate`, `subproject_commencedate`, `detail`, `mobilization_advance`, `mobilization_advance_amount`) VALUES (2, '2022-10-27', '2023-10-27', 'Lot - 02', 3, 3, '5.41', '389.95', '2023-06-22', '2022-10-27', 'Urban Green Space Initiatives – Womens Business Development & Community Centre and Sports Complex\r\n\r\n                                                \r\n                                                ', 'Yes', '0');
INSERT INTO `ppms_subproject` (`subproject_id`, `subproject_start_date`, `subproject_end_date`, `subproject_name`, `project_id`, `city_id`, `subproject_percentage`, `subproject_amount`, `subproject_acceptancedate`, `subproject_commencedate`, `detail`, `mobilization_advance`, `mobilization_advance_amount`) VALUES (3, '2022-11-08', '2023-11-07', 'Lot - 04   ', 3, 7, '2', '287.98', '2022-11-18', '2022-12-22', 'Urban Green Space Initiatives – Neighborhood Park, MINGORA. \r\n\r\n                                                \r\n                                                ', 'No', '0');
INSERT INTO `ppms_subproject` (`subproject_id`, `subproject_start_date`, `subproject_end_date`, `subproject_name`, `project_id`, `city_id`, `subproject_percentage`, `subproject_amount`, `subproject_acceptancedate`, `subproject_commencedate`, `detail`, `mobilization_advance`, `mobilization_advance_amount`) VALUES (4, '2022-11-03', '2023-10-21', 'Lot - 01', 2, 6, '1', '8503.16', '2022-11-27', '2023-03-23', 'Rehabilitation & Upgrade of Water Supply to WTP with SCADA including Rehabilitation & Provision of Water Storage Reservoirs, New Distribution Network & Water Metering System, Intake Structure I/c Transmission Main & Associated Structures,\r\n\r\n                                                ', 'Yes', '0');
INSERT INTO `ppms_subproject` (`subproject_id`, `subproject_start_date`, `subproject_end_date`, `subproject_name`, `project_id`, `city_id`, `subproject_percentage`, `subproject_amount`, `subproject_acceptancedate`, `subproject_commencedate`, `detail`, `mobilization_advance`, `mobilization_advance_amount`) VALUES (5, '2022-06-27', '2024-02-29', 'Lot - 03', 3, 5, '3', '582.64', '2022-05-13', '2022-09-23', 'Ring Road Green Belt and N-45 national Highway\r\n\r\n                                                ', 'Yes', '376');
INSERT INTO `ppms_subproject` (`subproject_id`, `subproject_start_date`, `subproject_end_date`, `subproject_name`, `project_id`, `city_id`, `subproject_percentage`, `subproject_amount`, `subproject_acceptancedate`, `subproject_commencedate`, `detail`, `mobilization_advance`, `mobilization_advance_amount`) VALUES (6, '2022-10-27', '2024-04-19', 'Lot - 05', 3, 1, '7.26', '1056.66', '2022-05-17', '2022-10-27', 'Besai Park Hayatabad and Bagh-e-Naran Park extension\r\n                                                ', 'Yes', '376');
INSERT INTO `ppms_subproject` (`subproject_id`, `subproject_start_date`, `subproject_end_date`, `subproject_name`, `project_id`, `city_id`, `subproject_percentage`, `subproject_amount`, `subproject_acceptancedate`, `subproject_commencedate`, `detail`, `mobilization_advance`, `mobilization_advance_amount`) VALUES (8, '2023-01-31', '2023-06-22', 'Lot - 03', 2, 3, '3', '4646.93', '2022-09-21', '2023-01-31', 'Improvement of Water Supply System with SCADA including (a) Rehabilitation & Provision of Water Storage Reservoirs (b) New Distribution Network and Water Metering System (c) Energization of Existing Tube Wells.\r\n                                                \r\n                                                ', 'Yes', '697.04');
INSERT INTO `ppms_subproject` (`subproject_id`, `subproject_start_date`, `subproject_end_date`, `subproject_name`, `project_id`, `city_id`, `subproject_percentage`, `subproject_amount`, `subproject_acceptancedate`, `subproject_commencedate`, `detail`, `mobilization_advance`, `mobilization_advance_amount`) VALUES (9, '2023-06-22', '2023-11-27', 'Lot - 02', 2, 6, '0', '2596.19322529', '2023-10-06', '2023-06-15', ' Rehabilitation & Upgrade of Water Supply System connected to the WTP with SCADA including New Water Treatment Plant.\r\n                                                ', 'Yes', '389.43');
INSERT INTO `ppms_subproject` (`subproject_id`, `subproject_start_date`, `subproject_end_date`, `subproject_name`, `project_id`, `city_id`, `subproject_percentage`, `subproject_amount`, `subproject_acceptancedate`, `subproject_commencedate`, `detail`, `mobilization_advance`, `mobilization_advance_amount`) VALUES (10, '2023-01-31', '2025-01-30', 'Lot - 04', 2, 1, '2', '2595.271296', '2023-01-31', '2023-01-31', '                                                Improvement of Water Supply System with SCADA including (a) Rehabilitation & Provision of Water Storage Reservoirs (b) New Distribution Network and Water Metering System (c) Energization of Existing Tube Wells,\r\n\r\n                                                \r\n                                                ', 'Yes', '389.29');
INSERT INTO `ppms_subproject` (`subproject_id`, `subproject_start_date`, `subproject_end_date`, `subproject_name`, `project_id`, `city_id`, `subproject_percentage`, `subproject_amount`, `subproject_acceptancedate`, `subproject_commencedate`, `detail`, `mobilization_advance`, `mobilization_advance_amount`) VALUES (11, '2022-10-03', '2025-10-03', 'Lot - 01', 1, 3, '0.42', '6731.94', '2022-12-14', '2023-01-31', 'Kotal Township (KDA) Sewerage System including New Sewerage Treatment Plant (STP) and required SCADA System, KOHAT.\r\n                                                ', 'Yes', '1010');
INSERT INTO `ppms_subproject` (`subproject_id`, `subproject_start_date`, `subproject_end_date`, `subproject_name`, `project_id`, `city_id`, `subproject_percentage`, `subproject_amount`, `subproject_acceptancedate`, `subproject_commencedate`, `detail`, `mobilization_advance`, `mobilization_advance_amount`) VALUES (12, '2022-11-04', '2025-11-03', 'Lot - 02', 1, 5, '0.75', '8313.86412348', '2022-12-23', '2022-12-20', 'Catchment Area of Rorya STP including New Sewerage Treatment Plant and required SCADA System, MARDAN.\r\n                                                ', 'Yes', '1247');
INSERT INTO `ppms_subproject` (`subproject_id`, `subproject_start_date`, `subproject_end_date`, `subproject_name`, `project_id`, `city_id`, `subproject_percentage`, `subproject_amount`, `subproject_acceptancedate`, `subproject_commencedate`, `detail`, `mobilization_advance`, `mobilization_advance_amount`) VALUES (13, '2023-01-31', '2026-01-30', 'Water Distribution System', 4, 8, '0.01', '20328.31', '2023-01-31', '2023-01-31', 'Water Distribution System intake structure and distribution system and SCADA,Mingora\r\n\r\n                                                ', 'Yes', '3049');


#
# TABLE STRUCTURE FOR: ppms_subproject_area
#

DROP TABLE IF EXISTS `ppms_subproject_area`;

CREATE TABLE `ppms_subproject_area` (
  `project_area_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_area_name` varchar(100) DEFAULT NULL,
  `subproject_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`project_area_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `ppms_subproject_area` (`project_area_id`, `project_area_name`, `subproject_id`) VALUES (1, 'Lot-04A', 10);
INSERT INTO `ppms_subproject_area` (`project_area_id`, `project_area_name`, `subproject_id`) VALUES (2, 'Women Business Development & Community Center', 2);
INSERT INTO `ppms_subproject_area` (`project_area_id`, `project_area_name`, `subproject_id`) VALUES (3, 'Sport Complex', 2);
INSERT INTO `ppms_subproject_area` (`project_area_id`, `project_area_name`, `subproject_id`) VALUES (4, 'Lot-01 Lot-01', 4);
INSERT INTO `ppms_subproject_area` (`project_area_id`, `project_area_name`, `subproject_id`) VALUES (5, 'Besai Park Hayatabad, Peshawar', 6);
INSERT INTO `ppms_subproject_area` (`project_area_id`, `project_area_name`, `subproject_id`) VALUES (6, 'Bagh-e-Naran Extension', 6);
INSERT INTO `ppms_subproject_area` (`project_area_id`, `project_area_name`, `subproject_id`) VALUES (7, 'Health & Safety (H&S) Environmental Management Plan & Traffic Management Plan (TMP)', 6);


#
# TABLE STRUCTURE FOR: ppms_subproject_assign
#

DROP TABLE IF EXISTS `ppms_subproject_assign`;

CREATE TABLE `ppms_subproject_assign` (
  `subproject_assign_id` int(11) NOT NULL AUTO_INCREMENT,
  `subproject_id` int(11) DEFAULT NULL,
  `contractor_id` int(11) DEFAULT NULL,
  `subproject_assign_status` int(1) DEFAULT NULL,
  `subproject_assign_date` date DEFAULT NULL,
  PRIMARY KEY (`subproject_assign_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (7, 1, 35, 1, '2022-06-27');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (8, 1, 36, 1, '2022-06-27');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (9, 2, 35, 1, '2022-06-27');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (10, 2, 36, 1, '2022-06-27');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (11, 5, 35, 1, '2022-06-27');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (12, 5, 36, 1, '2022-06-27');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (13, 3, 35, 1, '2022-06-27');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (14, 3, 36, 1, '2022-06-27');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (15, 6, 35, 1, '2022-06-27');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (16, 6, 36, 1, '2022-06-27');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (17, 4, 34, 1, '2023-03-22');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (18, 4, 53, 1, '2023-03-22');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (19, 9, 34, 1, '2022-11-08');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (20, 9, 53, 1, '2022-11-08');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (21, 8, 34, 1, '2022-11-08');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (22, 8, 53, 1, '2022-11-08');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (23, 10, 34, 1, '2022-11-08');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (24, 10, 53, 1, '2022-11-08');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (25, 11, 39, 1, '2022-10-03');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (26, 11, 36, 1, '2022-10-03');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (27, 12, 38, 1, '2022-11-04');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (28, 12, 54, 1, '2022-11-04');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (29, 13, 34, 1, '2022-11-29');
INSERT INTO `ppms_subproject_assign` (`subproject_assign_id`, `subproject_id`, `contractor_id`, `subproject_assign_status`, `subproject_assign_date`) VALUES (30, 13, 53, 1, '2022-11-29');


#
# TABLE STRUCTURE FOR: ppms_subproject_detail
#

DROP TABLE IF EXISTS `ppms_subproject_detail`;

CREATE TABLE `ppms_subproject_detail` (
  `subproject_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `subproject_start_date` date DEFAULT NULL,
  `subproject_end_date` date DEFAULT NULL,
  `subproject_acceptancedate` date DEFAULT NULL,
  `subproject_commencedate` date DEFAULT NULL,
  `subproject_id` int(11) DEFAULT NULL,
  `subproject_amount` double DEFAULT NULL,
  PRIMARY KEY (`subproject_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `ppms_subproject_detail` (`subproject_detail_id`, `subproject_start_date`, `subproject_end_date`, `subproject_acceptancedate`, `subproject_commencedate`, `subproject_id`, `subproject_amount`) VALUES (1, '2023-05-08', '2023-12-31', '2023-05-09', '0000-00-00', 1, '10');


#
# TABLE STRUCTURE FOR: ppms_subproject_site
#

DROP TABLE IF EXISTS `ppms_subproject_site`;

CREATE TABLE `ppms_subproject_site` (
  `sps_id` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(100) DEFAULT NULL,
  `subproject_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`sps_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `ppms_subproject_site` (`sps_id`, `site_name`, `subproject_id`) VALUES (1, 'P1', 10);
INSERT INTO `ppms_subproject_site` (`sps_id`, `site_name`, `subproject_id`) VALUES (2, 'Site-01', 4);


#
# TABLE STRUCTURE FOR: province
#

DROP TABLE IF EXISTS `province`;

CREATE TABLE `province` (
  `province_id` int(11) NOT NULL AUTO_INCREMENT,
  `province_name` varchar(100) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`province_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `province` (`province_id`, `province_name`, `country_id`) VALUES (1, 'KPK', 1);


#
# TABLE STRUCTURE FOR: s_designation
#

DROP TABLE IF EXISTS `s_designation`;

CREATE TABLE `s_designation` (
  `d_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `d_name` varchar(50) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# TABLE STRUCTURE FOR: user_new
#

DROP TABLE IF EXISTS `user_new`;

CREATE TABLE `user_new` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `user_status` varchar(10) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (1, 1, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 'Active', 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (22, 27, 'sameerali355@gmail.com', '202cb962ac59075b964b07152d234b70', 5, NULL, 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (23, 28, 'amekpcip@gmail.com', '202cb962ac59075b964b07152d234b70', 5, NULL, 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (24, 29, 'pskpcip@gmail.com', '202cb962ac59075b964b07152d234b70', 5, NULL, 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (25, 30, 'abidhayat@gmail.com', '202cb962ac59075b964b07152d234b70', 3, NULL, 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (26, 31, 'mehboob@gmail.com', '202cb962ac59075b964b07152d234b70', 4, NULL, 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (27, 32, 'nill', '202cb962ac59075b964b07152d234b70', 3, NULL, 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (28, 34, 'kifayatullahkhan@gmail.com', '77432d19be6c95ad0bbda79556bb9248', 3, NULL, 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (29, 40, 's.ishfaq.kpcip@gmail.com', '202cb962ac59075b964b07152d234b70', 6, NULL, 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (30, 41, 'yaqoob@gmail.com', '202cb962ac59075b964b07152d234b70', 3, NULL, 3);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (31, 42, 'mohsin@gmail.com', '202cb962ac59075b964b07152d234b70', 4, NULL, 3);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (32, 44, 'ihtisham@gmail.com', '202cb962ac59075b964b07152d234b70', 3, NULL, 4);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (33, 45, 'level1@gmail.com', '202cb962ac59075b964b07152d234b70', 3, NULL, 4);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (34, 46, 'level2@gmail.com', '202cb962ac59075b964b07152d234b70', 3, NULL, 4);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (35, 47, 'kpcip.monitoring@gmail.com', '202cb962ac59075b964b07152d234b70', 5, NULL, 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (36, 48, 'pk@gmail.com', '202cb962ac59075b964b07152d234b70', 3, NULL, 3);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (37, 49, 'ck@gmail.com', '202cb962ac59075b964b07152d234b70', 4, NULL, 3);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (38, 50, 'pp@gmail.com', '202cb962ac59075b964b07152d234b70', 3, NULL, 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (39, 51, 'cp@gmail.com', '202cb962ac59075b964b07152d234b70', 4, NULL, 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (40, 52, 'adb@gmail.com', '202cb962ac59075b964b07152d234b70', 6, NULL, 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (41, 53, 'nill@gmail.com', '202cb962ac59075b964b07152d234b70', 3, NULL, 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (42, 54, 'jte@gmail.com', '202cb962ac59075b964b07152d234b70', 2, NULL, 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (43, 55, 'ghulam_pmcsc@gmail.com', '202cb962ac59075b964b07152d234b70', 3, NULL, 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (44, 56, 'fakhar@gmail.com', '202cb962ac59075b964b07152d234b70', 4, NULL, 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (45, 57, 'dt@kpcip.gov.pk', '202cb962ac59075b964b07152d234b70', 5, NULL, 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (46, 58, 'pdkpcip@gmail.com', '202cb962ac59075b964b07152d234b70', 5, NULL, 1);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (47, 59, 'mis-officer@kpcip.gov.pk', '202cb962ac59075b964b07152d234b70', 4, NULL, 5);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (48, 60, 'muhammad.khalil@wsscm.org.pk', '202cb962ac59075b964b07152d234b70', 4, NULL, 5);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (49, 61, 'arshad.babar@cec.org.pk', '202cb962ac59075b964b07152d234b70', 3, NULL, 5);
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (50, 62, 'dfa@kpcip.gov.pk', '202cb962ac59075b964b07152d234b70', 5, NULL, 1);


#
# TABLE STRUCTURE FOR: usr_group
#

DROP TABLE IF EXISTS `usr_group`;

CREATE TABLE `usr_group` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) NOT NULL,
  `entry_user` varchar(100) DEFAULT NULL,
  `entry_date_time` datetime DEFAULT NULL,
  `update_user` varchar(100) DEFAULT NULL,
  `update_date_time` datetime DEFAULT NULL,
  PRIMARY KEY (`group_id`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `usr_group` (`group_id`, `group_name`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`) VALUES (1, 'Super Admin', NULL, NULL, NULL, NULL);
INSERT INTO `usr_group` (`group_id`, `group_name`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`) VALUES (2, 'admin', NULL, NULL, NULL, NULL);
INSERT INTO `usr_group` (`group_id`, `group_name`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`) VALUES (3, 'pmcsc', NULL, NULL, NULL, NULL);
INSERT INTO `usr_group` (`group_id`, `group_name`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`) VALUES (4, 'ciu', NULL, NULL, NULL, NULL);
INSERT INTO `usr_group` (`group_id`, `group_name`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`) VALUES (5, 'pmu', NULL, NULL, NULL, NULL);
INSERT INTO `usr_group` (`group_id`, `group_name`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`) VALUES (6, 'adb', NULL, NULL, NULL, NULL);
INSERT INTO `usr_group` (`group_id`, `group_name`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`) VALUES (7, '', NULL, NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: wing
#

DROP TABLE IF EXISTS `wing`;

CREATE TABLE `wing` (
  `wing_id` int(11) NOT NULL AUTO_INCREMENT,
  `wing_name` varchar(100) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`wing_id`),
  KEY `fk_wingID` (`department_id`),
  CONSTRAINT `fk_wingID` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `wing` (`wing_id`, `wing_name`, `department_id`) VALUES (1, 'IT Wing', 3);
INSERT INTO `wing` (`wing_id`, `wing_name`, `department_id`) VALUES (2, 'IT Wing 2', 1);


