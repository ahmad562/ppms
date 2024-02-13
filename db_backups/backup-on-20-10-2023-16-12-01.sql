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
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7fc67f475e68f080980d9d1764ba79d33e58ee83', '58.65.201.165', 1692353533, '__ci_last_regenerate|i:1692353533;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ba1b796f6f2dfd6f6fd9b50b48888dacbeb597d0', '58.65.201.165', 1692353533, '__ci_last_regenerate|i:1692353533;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('dc2d4bee3bd672c3a2c87579a6a32c114ce5ba01', '167.94.145.60', 1692546953, '__ci_last_regenerate|i:1692546953;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('93cd2809ff5f0582626db204a10974a01e0fa264', '167.94.145.60', 1692546955, '__ci_last_regenerate|i:1692546955;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('cfcc64a2208e446f27ff603b808503880c0b1762', '182.191.93.44', 1692597339, '__ci_last_regenerate|i:1692597339;username|s:28:\"muhammad.khalil@wsscm.org.pk\";userid|s:2:\"48\";empid|s:2:\"60\";groupid|s:1:\"4\";cityid|s:1:\"5\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e18bd40ee339791f44baeb8ee6039880c4fa588f', '182.191.93.44', 1692597340, '__ci_last_regenerate|i:1692597339;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2c44425ca5f995c4a24a5894a42aceb4c347d2bd', '58.65.201.165', 1692614728, '__ci_last_regenerate|i:1692614728;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6295a32ece8a6e2866ce9fef68207a347f56156a', '58.65.201.165', 1692614886, '__ci_last_regenerate|i:1692614728;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d6e78dd03c75f4f0cd1ac05a3322264a1e2761eb', '142.93.227.80', 1692620022, '__ci_last_regenerate|i:1692620022;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d025ddd32b5c1513b34c2549f1e9746cf8127672', '142.93.227.80', 1692620023, '__ci_last_regenerate|i:1692620023;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ac5a58aa6599b864d0f9dd7eab25893c4e261c68', '198.235.24.82', 1692676528, '__ci_last_regenerate|i:1692676528;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e8aab801f3fdf28559c90333c018719fd1912a1e', '192.140.150.5', 1692683258, '__ci_last_regenerate|i:1692683258;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a9c4199158e0ee08b4b8e2928808f7ae7f4d8799', '192.140.150.5', 1692684476, '__ci_last_regenerate|i:1692684476;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('06f558fa1f29569e807f1513f990d30fe3b432f7', '205.210.31.76', 1692683595, '__ci_last_regenerate|i:1692683595;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a1aa404ddcbda5f1c92c190f8b34556330d8f9bd', '58.65.201.165', 1692683756, '__ci_last_regenerate|i:1692683661;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ab532dad47c30f54de792561692e81f323abc056', '192.140.150.5', 1692685020, '__ci_last_regenerate|i:1692685020;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('817be749e1be0b3971de8c90420771b59c0153f5', '192.140.150.5', 1692689717, '__ci_last_regenerate|i:1692689717;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('018634b70205f556edb97c274f6b27d74a8a46f4', '192.140.150.5', 1692686095, '__ci_last_regenerate|i:1692686095;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f42d82df65b7cb92c793aca1bd08ec1c66165b38', '192.140.150.5', 1692690959, '__ci_last_regenerate|i:1692690959;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fe14834af3fc1f2b68b599b70b437847701dfe60', '192.140.150.5', 1692695083, '__ci_last_regenerate|i:1692695083;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2341a169eeb4150bd78eb4b3ee6487933a6b1ce4', '205.210.31.111', 1692693436, '__ci_last_regenerate|i:1692693436;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a30dba26631c66acb595a2149900cdd9c4a4052f', '58.65.201.165', 1692695083, '__ci_last_regenerate|i:1692695083;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('39fde093dbb01fce5bb944751e6246d1b65fd14c', '58.65.201.165', 1692699070, '__ci_last_regenerate|i:1692699070;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('47f0ee75b1b2523d07182413d302fdecdd2fba0c', '167.94.145.58', 1692803654, '__ci_last_regenerate|i:1692803654;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a720f2ebba837a81a6c027336f119ee0e75f7948', '167.94.145.58', 1692803655, '__ci_last_regenerate|i:1692803655;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bb476a0ec809124dcf426d79f86f0f00e0a06dd2', '58.65.201.165', 1692856083, '__ci_last_regenerate|i:1692856081;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d21cf182a6d7ef9c9cf21ec2b90f8b9c51c69f77', '58.65.201.165', 1692856406, '__ci_last_regenerate|i:1692856212;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2f6944f60dd59a37d8e3b819ec8a8f6c4b2bb5b5', '58.65.201.165', 1692863370, '__ci_last_regenerate|i:1692863370;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4eaee55a4234c12bcf4841c4e338a377eba2f81c', '58.65.201.165', 1692873664, '__ci_last_regenerate|i:1692873656;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('54e65dc005c9adb87e5db902e0f4859f9eb6190a', '58.65.201.165', 1692874945, '__ci_last_regenerate|i:1692874945;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('43f36c672f3d3a83d74ee6b1318e2887c1e532c4', '154.192.145.30', 1692942038, '__ci_last_regenerate|i:1692942038;username|s:39:\"muhammad.mehboobalam@wsspeshawar.org.pk\";userid|s:2:\"26\";empid|s:2:\"31\";groupid|s:1:\"4\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('63413afaf2eede255c0ba54f8c88761c13b5658b', '154.192.145.30', 1692943662, '__ci_last_regenerate|i:1692943662;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0d47d33b8dff81c5c400e7b018ade3f869b977ed', '58.65.201.165', 1692943908, '__ci_last_regenerate|i:1692943908;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('861c530a14790ec7822133aa7e538eeb90b8724d', '154.192.145.30', 1692945835, '__ci_last_regenerate|i:1692945835;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('aebd94e6c964052c058ef83001e7927c6b4ad393', '58.65.201.165', 1692944235, '__ci_last_regenerate|i:1692944235;username|s:22:\"sameerali355@gmail.com\";userid|s:2:\"22\";empid|s:2:\"27\";groupid|s:1:\"5\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9a67d57d97ec60a555e405992de144cb09150263', '58.65.201.165', 1692944808, '__ci_last_regenerate|i:1692944808;username|s:22:\"sameerali355@gmail.com\";userid|s:2:\"22\";empid|s:2:\"27\";groupid|s:1:\"5\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('92bdca2959078bc63cdae093fdbee41bcdf59b6b', '58.65.201.165', 1692945071, '__ci_last_regenerate|i:1692944808;username|s:22:\"sameerali355@gmail.com\";userid|s:2:\"22\";empid|s:2:\"27\";groupid|s:1:\"5\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('32b8c2e3bc01f9ec017f18e53439cb13ab06727a', '154.192.145.30', 1692946102, '__ci_last_regenerate|i:1692946101;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ef7d1a3860f97098558c523277dca389b194eb40', '206.84.170.18', 1692946597, '__ci_last_regenerate|i:1692946597;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('eef5b08fec2b1058be58bf159e125b07324886c3', '205.210.31.244', 1692954620, '__ci_last_regenerate|i:1692954620;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8ee264481a004f628e044f455c3e222feeeda29c', '205.210.31.184', 1692965773, '__ci_last_regenerate|i:1692965773;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d3e2df08a14bb048de041e59e63b912476a2c37b', '205.210.31.26', 1693055306, '__ci_last_regenerate|i:1693055306;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ac049c5f169e546334e3746d50e7f0b152f6ce1c', '198.235.24.5', 1693059504, '__ci_last_regenerate|i:1693059504;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('18b1902ccbffd33554f3288efb840135b03fae15', '188.166.84.18', 1693148199, '__ci_last_regenerate|i:1693148199;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f740357fa2915c63b3981e84cd5f7f8c7eda5611', '188.166.84.18', 1693148199, '__ci_last_regenerate|i:1693148199;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d41811448daef684db22dd54fdbe1741c955968b', '198.235.24.142', 1693165988, '__ci_last_regenerate|i:1693165988;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2f49b716cf70d9ef78e67093693bb50df77ca43b', '198.235.24.142', 1693165989, '__ci_last_regenerate|i:1693165989;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('63ce7eb4ef7a4429216ff6d4184b5878adf68fc8', '198.235.24.25', 1693179791, '__ci_last_regenerate|i:1693179791;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('54d96193fdf75b741e0e0230d8f32e54c15796c9', '198.235.24.25', 1693179792, '__ci_last_regenerate|i:1693179792;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('de76d461edbafbb4e1099c0b7b9b6590749a1f4b', '205.210.31.6', 1693203935, '__ci_last_regenerate|i:1693203935;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('adb5622fefc5ebf22d5368a7ca1d1023a81d113d', '205.210.31.6', 1693203936, '__ci_last_regenerate|i:1693203936;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f88163d0d9e61264304b814f0a3701a8fe7af3e1', '205.210.31.38', 1693228544, '__ci_last_regenerate|i:1693228544;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0dfd427eb91cf06251886140076a4093713964df', '205.210.31.38', 1693228545, '__ci_last_regenerate|i:1693228545;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f71e0419a2c48bd7b8e8c3e203f7d951e9a0ccc1', '198.235.24.42', 1693331792, '__ci_last_regenerate|i:1693331792;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e0629a9131f80bcf246f9291d58f7676a1df0232', '111.7.100.21', 1693349792, '__ci_last_regenerate|i:1693349792;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a6712dc3fce5d2a9a0e80fe38d08e74ea9bc86e1', '111.7.100.22', 1693349793, '__ci_last_regenerate|i:1693349793;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d2abc3421ebf9509d06a6b2e3c873db6f8b3ac5d', '203.82.54.82', 1693366830, '__ci_last_regenerate|i:1693366676;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7afeef4442c14aa8913a1d240c49e9716c1240b2', '206.84.171.4', 1693370983, '__ci_last_regenerate|i:1693370983;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('cec201219e7f16231d26fdb0644e66712d5eec62', '58.65.201.165', 1693370964, '__ci_last_regenerate|i:1693370963;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b91f1474c48e010304ce188147e4f88dbd40cd0e', '206.84.171.4', 1693370992, '__ci_last_regenerate|i:1693370983;username|s:39:\"muhammad.mehboobalam@wsspeshawar.org.pk\";userid|s:2:\"26\";empid|s:2:\"31\";groupid|s:1:\"4\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('de665d2a521a99d15c719d7728835b0089cbf9c1', '206.84.171.4', 1693379169, '__ci_last_regenerate|i:1693379169;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3f24ca2802ce142f67e7737fd0b010487150d0ae', '58.65.201.165', 1693393076, '__ci_last_regenerate|i:1693393060;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e4ce1a63f9ce09027c3b7ae038bf6e3d8cef89a1', '188.165.87.110', 1693395825, '__ci_last_regenerate|i:1693395825;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4d8894d82e74d0c69a6b598ef4b07faa9685269f', '188.165.87.102', 1693395825, '__ci_last_regenerate|i:1693395825;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('de4a1818ae45195a09250edf9d02c62433462b30', '188.165.87.109', 1693395826, '__ci_last_regenerate|i:1693395826;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2ca25cbf920c23f60417a6d8896f171e061e0827', '188.165.87.103', 1693395829, '__ci_last_regenerate|i:1693395829;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f8eb5b8b3606cb99ecddc432864fb7c472d0136f', '51.254.49.100', 1693400718, '__ci_last_regenerate|i:1693400718;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('01f912485b05b097cbbb8d308d599e62f655eb8b', '51.254.49.111', 1693400719, '__ci_last_regenerate|i:1693400719;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0e4a784537252a157faa738a00e66fcd2ce9604d', '37.187.215.240', 1693401569, '__ci_last_regenerate|i:1693401569;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('89f24b5a72cd9e5f3bb22dca93d77768c9ff90ca', '205.210.31.254', 1693408347, '__ci_last_regenerate|i:1693408347;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ea191e588b672dddb0c65e6489f05c1ae7da6618', '162.142.125.223', 1693450921, '__ci_last_regenerate|i:1693450921;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7aa748387cac61e35f8ec99aba70a9af2a1ed334', '162.142.125.223', 1693450922, '__ci_last_regenerate|i:1693450922;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('568e84330e190a875719ba1be7d6f2e0a634f11e', '167.94.138.125', 1693462577, '__ci_last_regenerate|i:1693462577;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('40a2869698022254f6aca247fde33b75687b8fea', '167.94.138.125', 1693462578, '__ci_last_regenerate|i:1693462578;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9d0ed80d80123435d2528e6926a89afdc71c2efa', '198.235.24.234', 1693537437, '__ci_last_regenerate|i:1693537437;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b815e3d15e70675eb88a6dce044b765253d404bf', '58.65.201.165', 1693548728, '__ci_last_regenerate|i:1693548728;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ad5ef7bb68ee85a3f65a47c05ea3a234672f4785', '206.84.171.4', 1693548728, '__ci_last_regenerate|i:1693548728;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3107c9e01a961fdd467007dfd8e79fd018a45939', '40.77.167.18', 1693613176, '__ci_last_regenerate|i:1693613176;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ee5ce58dfc785008aef394d945208313dfd11a76', '205.210.31.52', 1693645295, '__ci_last_regenerate|i:1693645295;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('025bbcc71cd068fd703f790111b684ae619b64e1', '205.210.31.52', 1693645295, '__ci_last_regenerate|i:1693645295;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('704f36405d114c57aa6e9301d45a207b2d6a79ec', '68.183.196.232', 1693824692, '__ci_last_regenerate|i:1693824692;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('788c2d334d107ca427dfb476a7debcf385193a07', '68.183.196.232', 1693824692, '__ci_last_regenerate|i:1693824692;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ad5f1adf42fff52d3b57a8d50b5f57ef63aa3f05', '198.235.24.132', 1693829062, '__ci_last_regenerate|i:1693829062;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('59b92c2aea6b9ca4d4baeec44a7b9fd2b16565bf', '198.235.24.132', 1693829063, '__ci_last_regenerate|i:1693829063;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('41fcd476db3bfd49c816e73f0f3ebc7684c0998e', '58.65.201.165', 1693894849, '__ci_last_regenerate|i:1693894848;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ce79f523e0b498db863af4d452e9aef57b081e4c', '167.94.145.52', 1693954025, '__ci_last_regenerate|i:1693954025;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9296632611edd873e1784259cfa167b9f6590dfd', '167.94.145.52', 1693954030, '__ci_last_regenerate|i:1693954030;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('21e48c16aa86be5f3a1399a503580a4acbf5c6e6', '167.248.133.189', 1693956085, '__ci_last_regenerate|i:1693956085;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f6885fb49dcd78614af09078a42435b3d0f2b3c0', '167.248.133.189', 1693956087, '__ci_last_regenerate|i:1693956087;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e2b09b0fb3c37c9ca9d00842cc6bba46db3f2d9a', '58.65.201.165', 1693975359, '__ci_last_regenerate|i:1693975352;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0be483619540e4c0ee35a79a2c90cfa29c518795', '162.142.125.215', 1694052557, '__ci_last_regenerate|i:1694052557;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e7cea8c655ebdfcf3cd2b8fdb264213221b07823', '162.142.125.215', 1694052557, '__ci_last_regenerate|i:1694052557;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('40860d4988f1bb581a3b1d7286d38aee47cb84fa', '87.236.176.216', 1694075355, '__ci_last_regenerate|i:1694075355;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('997fe3d1e2ca7548c17ba1219d3041dcdc387490', '87.236.176.216', 1694075356, '__ci_last_regenerate|i:1694075356;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('792bc5cf85d6cde947c974c6bebe46aa1b6bdbc1', '58.65.201.165', 1694149990, '__ci_last_regenerate|i:1694149927;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a822c7b891afa647ca4869b384541c72696fecd2', '167.248.133.123', 1694188673, '__ci_last_regenerate|i:1694188673;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b08b0b9b8eb04e8a7f36d39662556c3306e124f6', '167.248.133.123', 1694188675, '__ci_last_regenerate|i:1694188675;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a1b10eea4407917e6e8cf43b104dcd37d11ea594', '167.248.133.183', 1694194010, '__ci_last_regenerate|i:1694194010;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('01bc747409469e4e172396735617eb794f8dd308', '66.249.66.43', 1694255725, '__ci_last_regenerate|i:1694255724;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7c17f9a8466cc43a39c30e191ab70978490705c3', '66.249.66.44', 1694255729, '__ci_last_regenerate|i:1694255729;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f851d09deb3ebe934ea97848c4fc56c627e24ec1', '66.249.66.43', 1694304244, '__ci_last_regenerate|i:1694304243;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('650ca1338ae6578a858c97611ea5fe8973e1a0c8', '66.249.66.43', 1694304248, '__ci_last_regenerate|i:1694304248;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('78f553e902b2ccd4bf8e15a701011f106700a079', '142.93.60.216', 1694313621, '__ci_last_regenerate|i:1694313620;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e5053f8fe4422afadd2856a63b1ca9ddc9eac62b', '142.93.60.216', 1694313621, '__ci_last_regenerate|i:1694313621;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('84ef365451c778e98c76e81ebb2cf2c6b1d5f290', '167.94.145.56', 1694355296, '__ci_last_regenerate|i:1694355296;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c380d5bc2d58ae93344a49daffd28f5339119d34', '167.94.145.56', 1694355298, '__ci_last_regenerate|i:1694355298;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('022bc618c1d4f15049f79cea6edfe95f7f5b2322', '87.236.176.8', 1694370993, '__ci_last_regenerate|i:1694370992;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('78e8999610329724d6038ee18172f6732ad2bb53', '87.236.176.125', 1694414936, '__ci_last_regenerate|i:1694414936;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c3b72deaaf4884e14edc764dc5b1588e4572284a', '87.236.176.125', 1694414937, '__ci_last_regenerate|i:1694414937;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d93d04c8f0f67617d64b135751bbb56a190bb89b', '58.65.201.165', 1694419328, '__ci_last_regenerate|i:1694419328;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('41c7c2a236aed4fb753c4c97d71692d13a99979e', '87.236.176.165', 1694426250, '__ci_last_regenerate|i:1694426250;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d4ee7acc496807147ecc764141a00f0627e7829e', '66.249.66.44', 1694513223, '__ci_last_regenerate|i:1694513222;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b39a4efd5f92371f7f5d4813ecdbddae05bfb67a', '154.192.158.29', 1694581945, '__ci_last_regenerate|i:1694581928;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1a14cd512fc34f1ca54b89f1bd973b2e6ec2d689', '154.192.158.29', 1694752695, '__ci_last_regenerate|i:1694752695;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('25eac148b546b935c847e8e62221071b8f7243f6', '154.192.158.29', 1694753205, '__ci_last_regenerate|i:1694753205;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ffd75a58657060cba12110c830f34e40360041dd', '154.192.158.29', 1694753872, '__ci_last_regenerate|i:1694753872;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3a349a7ed69fe33e078db0c425ec94f0a9b83398', '66.249.66.43', 1694753855, '__ci_last_regenerate|i:1694753854;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('575ac7d488d76960791b0ecfdad095ca52484cd1', '154.192.158.29', 1694759771, '__ci_last_regenerate|i:1694759771;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f26731a33637528e84e7f92008659909592e0f10', '154.192.158.29', 1694761225, '__ci_last_regenerate|i:1694761225;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4e2ddfc3b24c6f66fe8c7dbdc42de58591139cac', '154.192.158.29', 1694761225, '__ci_last_regenerate|i:1694761225;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fc6761abb94e4acc43f8cc6eaa9fa5a179eff45d', '66.249.66.43', 1694783701, '__ci_last_regenerate|i:1694783700;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('cc1332fc70996ceaa47ac50936786c599ca8a30e', '167.94.146.59', 1694801523, '__ci_last_regenerate|i:1694801523;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('92a8a5f29c35e2d013cd0aed0dd472972e80e3cc', '167.94.146.59', 1694801525, '__ci_last_regenerate|i:1694801525;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1793d7ef98827e653d4c131cd0c875c1c14b836e', '167.248.133.189', 1694805097, '__ci_last_regenerate|i:1694805097;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('734b8d0b77c50ce7561c822be92148270274e1a2', '167.248.133.189', 1694805098, '__ci_last_regenerate|i:1694805098;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8137125069498abc209d981b8cbfa0f6a8cc1f3f', '167.94.145.59', 1694968038, '__ci_last_regenerate|i:1694968038;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c837f1aa1edcffab9aafc1f01e29826fac84b58b', '167.94.145.59', 1694968040, '__ci_last_regenerate|i:1694968040;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('706df5c57b85f729a1b368741cf8efa24b0e33f4', '167.248.133.34', 1694978295, '__ci_last_regenerate|i:1694978295;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2af38bd78d77583abaae8b25896ed46bbe29e1cc', '167.248.133.34', 1694978299, '__ci_last_regenerate|i:1694978299;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2f187ad3a79ed45c0d0e33e110526d4b17752461', '58.65.201.165', 1695024866, '__ci_last_regenerate|i:1695024766;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2544d4622b921ec042244aaeadbff8653cf13a16', '58.65.201.165', 1695025453, '__ci_last_regenerate|i:1695025453;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ffaac20c396ab9023fbb0635bf1fe4a46cd816fd', '58.65.201.165', 1695025767, '__ci_last_regenerate|i:1695025767;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e74771fd8332e135ea5ef6207905fb377bb65073', '58.65.201.165', 1695026115, '__ci_last_regenerate|i:1695026115;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0de1275feeb45900598705788709723d95f5a898', '58.65.201.165', 1695027032, '__ci_last_regenerate|i:1695027032;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('14cc0df5260589694c8cc3a05407cd069558eda4', '58.65.201.165', 1695027384, '__ci_last_regenerate|i:1695027384;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5b478d52a7d60b6bc765a7cec571929244fbaa35', '58.65.201.165', 1695027519, '__ci_last_regenerate|i:1695027384;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ec826d2f95de0923d0f8ca8da70fc4bbef62acc2', '68.183.198.67', 1695037502, '__ci_last_regenerate|i:1695037502;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8d0a260d9fd5557bee9a04fd56cf024019a92c28', '68.183.198.67', 1695037503, '__ci_last_regenerate|i:1695037503;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9316f60ee20b0e571e309a1d2a9674e4ca7fb5b2', '66.249.66.43', 1695048280, '__ci_last_regenerate|i:1695048279;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9ef2991ff49a1adcb658396ca98c6d55ebfd25ea', '58.65.201.165', 1695118794, '__ci_last_regenerate|i:1695118793;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('45fec32e8eda916e1a64b9f9f34b7a1b6faa5721', '58.65.201.165', 1695118818, '__ci_last_regenerate|i:1695118818;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3f899a422748932b76d2f4e0250e511bf28cb130', '58.65.201.165', 1695198615, '__ci_last_regenerate|i:1695198615;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a423ec11901ef084f30d2fb06fde307d58274071', '167.248.133.51', 1695335357, '__ci_last_regenerate|i:1695335357;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d96daebeb356b8379a4ea9d9572b42e6c7da1034', '167.248.133.51', 1695335357, '__ci_last_regenerate|i:1695335357;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fe05384757bad61b7bf00c7c69e0fb90116c97a4', '162.142.125.13', 1695346036, '__ci_last_regenerate|i:1695346036;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('46356aec15548351fbba7bdcdebcf6e57356d055', '162.142.125.13', 1695346036, '__ci_last_regenerate|i:1695346036;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1145e426f7d68d3e7c1d07c66c17d3bea39ddbb6', '54.158.3.168', 1695364804, '__ci_last_regenerate|i:1695364804;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f30c93fa2eae274aeba3b9e8acda0ae9344bf68e', '54.158.3.168', 1695364804, '__ci_last_regenerate|i:1695364804;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d4f6adc35649012a0d6b4e62954957ab7465450d', '54.81.213.254', 1695364881, '__ci_last_regenerate|i:1695364881;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('999f7318dc4575ef558f74d9b4b6ce31478aa0fc', '54.81.213.254', 1695364881, '__ci_last_regenerate|i:1695364881;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('da75de949a8bc39b46441480defb4af3a51c7af8', '167.248.133.189', 1695463745, '__ci_last_regenerate|i:1695463745;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('540ceff967c52011a0268c818ac8ba971102205a', '167.248.133.189', 1695463748, '__ci_last_regenerate|i:1695463748;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d0765ceb503e28e5ca6444075d6bb3a47e864052', '167.248.133.35', 1695467823, '__ci_last_regenerate|i:1695467823;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('605131d1c5862630a9b7a4c80ed7c629e388c674', '167.248.133.35', 1695467823, '__ci_last_regenerate|i:1695467823;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('744b6497c27c1e1f7c7f67e09323576a5a6711b3', '138.197.166.116', 1695548421, '__ci_last_regenerate|i:1695548421;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ced77bea256f06a2781a63fc83c7ad38d11ee262', '138.197.166.116', 1695548421, '__ci_last_regenerate|i:1695548421;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9fb4f4029de88d8df68b11e68aaaa27813ec895a', '167.94.146.51', 1695569855, '__ci_last_regenerate|i:1695569855;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6ba88132fad01c4a8ec2b76ff665196aa2f4e676', '167.94.146.51', 1695569857, '__ci_last_regenerate|i:1695569857;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c13c0a8da3d451d976efa86bc2948f3e6f13cf51', '167.248.133.185', 1695605150, '__ci_last_regenerate|i:1695605150;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('33153da5a3bba549a16b085039bc5567f7599c9f', '167.248.133.185', 1695605151, '__ci_last_regenerate|i:1695605151;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('04b482ab3b4e47bef53be82f6cb5ad347ea35df6', '167.94.146.51', 1695609221, '__ci_last_regenerate|i:1695609221;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f146234079e1d7fef3a070c3f16267a61020d298', '167.94.146.51', 1695609222, '__ci_last_regenerate|i:1695609222;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('64d36fe28caf70e58aeee4c34ee6deea6421965a', '167.94.145.55', 1695612774, '__ci_last_regenerate|i:1695612774;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('26d266567872bab0854011d934f77a572612579a', '167.94.145.55', 1695612774, '__ci_last_regenerate|i:1695612774;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f654a0faa4ed8edd8c51dc0c344fff3b026b9f7d', '58.65.201.165', 1695621041, '__ci_last_regenerate|i:1695621041;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3624ff164dcd58a40523d8832c44aba50e061314', '58.65.201.165', 1695624836, '__ci_last_regenerate|i:1695624836;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7f53ed6ce564296ae33f2084de480f82151e9d09', '58.65.201.165', 1695625204, '__ci_last_regenerate|i:1695625204;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('533df3cb30e71b462d426ea5c8473a494bdeedde', '58.65.201.165', 1695625513, '__ci_last_regenerate|i:1695625513;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('007d3559de8aa9cdbb54d4f4768b29be33044325', '58.65.201.165', 1695625854, '__ci_last_regenerate|i:1695625854;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('eaf2d137a1d97e8d9391cb727b5847f1dfde014e', '58.65.201.165', 1695626175, '__ci_last_regenerate|i:1695626175;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('eeccc7a6f81a3f7fea493683784684c6b90e22c3', '58.65.201.165', 1695626509, '__ci_last_regenerate|i:1695626509;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('29fe1ba1927b7c941f81bf926404edf0b6c7cb16', '58.65.201.165', 1695626553, '__ci_last_regenerate|i:1695626509;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fcdbc9f1f47dc2e6c863605deb6b47eef14a2fb6', '39.33.116.84', 1695635501, '__ci_last_regenerate|i:1695635501;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('57f2fa19d660919406bd5c5374d39a4745c647f9', '39.33.116.84', 1695639200, '__ci_last_regenerate|i:1695639200;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('eec34e2e23e93349f6c9b344775582bbf6cc474f', '39.33.116.84', 1695639665, '__ci_last_regenerate|i:1695639665;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b980384066eb4c781eb3ded933c8fddd888352b6', '39.33.116.84', 1695640001, '__ci_last_regenerate|i:1695640001;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('99be9e37d08a4fa45c574d9e7a247471155f8ce1', '39.33.116.84', 1695640327, '__ci_last_regenerate|i:1695640327;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b1ebe3f409fa64b52e836ec0f696cae500fcce59', '39.33.116.84', 1695640688, '__ci_last_regenerate|i:1695640557;username|s:23:\"arshad.babar@cec.org.pk\";userid|s:2:\"49\";empid|s:2:\"61\";groupid|s:1:\"3\";cityid|s:1:\"5\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5e8cf7f5f23a50b3342fbe30f43872a46122babc', '154.192.148.7', 1695702938, '__ci_last_regenerate|i:1695702938;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c2a94f36b1e156cc5dcb91ff01c0981c81c4642a', '154.192.148.7', 1695709571, '__ci_last_regenerate|i:1695709571;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e50a36c7b645a4ec68095910ccd835066d672aed', '154.192.148.7', 1695711873, '__ci_last_regenerate|i:1695711873;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ddd9c5c9df7de30b2c0fb94f5c6dd0cb0626a410', '58.65.201.165', 1695711648, '__ci_last_regenerate|i:1695711648;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8c2ab73b5c938dcb6afa949f44d4d429040cb2f3', '58.65.201.165', 1695712223, '__ci_last_regenerate|i:1695712223;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8e8030b73e7c0b0451e69d4de4568e884bf506d7', '58.65.201.165', 1695713769, '__ci_last_regenerate|i:1695713769;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e02402c9c3f76b0c4d7ea94960773937454a8483', '58.65.201.165', 1695712976, '__ci_last_regenerate|i:1695712976;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f2eedd94e816429cc537c102e02b4de1c6cdb8b3', '58.65.201.165', 1695720442, '__ci_last_regenerate|i:1695720442;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d96bbb0b2ba7f01301ddabee02ffd4ffc3807c02', '58.65.201.165', 1695718582, '__ci_last_regenerate|i:1695718582;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8f15b3aeb625c303dc34811e1abc09e7652da67b', '58.65.201.165', 1695718625, '__ci_last_regenerate|i:1695718582;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('85aacbbd8d01657bc34b46aa276c83d8dda5d355', '58.65.201.165', 1695725540, '__ci_last_regenerate|i:1695725540;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bd80548d149240e6df6f631cb4f30a5e5d973971', '58.65.201.165', 1695725540, '__ci_last_regenerate|i:1695725540;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3d43435d3a010cbd93915153e4a276aef6080cbf', '58.65.201.165', 1695793624, '__ci_last_regenerate|i:1695793624;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9d87fc3bc50ff88fe019f5843871cb7138a131e5', '58.65.201.165', 1695794459, '__ci_last_regenerate|i:1695794459;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0c50d50eb0f4ec2b6471b9ecf981b90336d88cd0', '58.65.201.165', 1695795033, '__ci_last_regenerate|i:1695795033;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5f5625be69cb1318c278092e8fdea2dd780036f2', '116.71.23.32', 1695795029, '__ci_last_regenerate|i:1695795029;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f82730e4656ca57ce02ed088bece5a353a3fbb40', '58.65.201.165', 1695796347, '__ci_last_regenerate|i:1695796347;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4db12dc093d32dc964dada949357f79ad8eacd8c', '116.71.23.32', 1695796414, '__ci_last_regenerate|i:1695796414;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d6dd7ca3a0f180924dddc6ccec314529f791cebf', '58.65.201.165', 1695796360, '__ci_last_regenerate|i:1695796347;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0c9a70668ffa7cda7e068b026095d83c8bcdd6e1', '116.71.23.32', 1695796961, '__ci_last_regenerate|i:1695796961;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('90f52ca25fe839d6fdcecb1013f548c7c4b8b958', '116.71.23.32', 1695797363, '__ci_last_regenerate|i:1695797363;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e5ecfba9ee7f7e0fe18d035bb0b7fb16cae183bd', '116.71.23.32', 1695798268, '__ci_last_regenerate|i:1695798268;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('791289eb9ac8ed31b0ea2a1b225e0c10ef8ce9b3', '116.71.23.32', 1695800381, '__ci_last_regenerate|i:1695800381;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c8085f94b748fa45d238b7b7edf315b7cf526ed6', '116.71.23.32', 1695801089, '__ci_last_regenerate|i:1695801089;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('040b5a82bb9a5e46bb3b26b198eedf46b3276100', '116.71.23.32', 1695801728, '__ci_last_regenerate|i:1695801728;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c51c287b8cc313a2523cf705197886829e2211ef', '116.71.23.32', 1695802293, '__ci_last_regenerate|i:1695802293;username|s:16:\"yaqoob@gmail.com\";userid|s:2:\"30\";empid|s:2:\"41\";groupid|s:1:\"3\";cityid|s:1:\"3\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6fb51a076f67cac828c2e0f5541a81e36d1f3b5b', '116.71.23.32', 1695802680, '__ci_last_regenerate|i:1695802680;username|s:16:\"yaqoob@gmail.com\";userid|s:2:\"30\";empid|s:2:\"41\";groupid|s:1:\"3\";cityid|s:1:\"3\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b5afef887caefc62a5c6275537c240bcae36f267', '116.71.23.32', 1695803507, '__ci_last_regenerate|i:1695803507;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";bilo|i:420;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2d85bb2b357dbd8761c87466020b9aa7e4b25be4', '116.71.23.32', 1695803812, '__ci_last_regenerate|i:1695803620;username|s:16:\"mohsin@gmail.com\";userid|s:2:\"31\";empid|s:2:\"42\";groupid|s:1:\"4\";cityid|s:1:\"3\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5b73dfd5d5197faf04fbde0e2a59cda21fa9781c', '58.65.201.165', 1695805731, '__ci_last_regenerate|i:1695805731;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('7e842f126b6e4c015ab8d5514fa7040022ff4046', '58.65.201.165', 1695805737, '__ci_last_regenerate|i:1695805737;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3534c742b04051414d8bc69f88b79cb3eb9b7dd3', '162.142.125.11', 1695943966, '__ci_last_regenerate|i:1695943966;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ad04408c3f770224b7756833ba60ef9b0492af36', '162.142.125.11', 1695943967, '__ci_last_regenerate|i:1695943967;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('794f801fda591a71bb5efc060e5502a52be3fd8d', '162.142.125.226', 1696038778, '__ci_last_regenerate|i:1696038778;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('76f34fd214f00605dd7eb0eb487882b9350dd3c7', '162.142.125.226', 1696038779, '__ci_last_regenerate|i:1696038779;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3445b0a619941c545a7cb614d56c2518592ae702', '159.223.220.70', 1696236638, '__ci_last_regenerate|i:1696236638;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3f14425778ec40fe30d45cca91c7d748e4f9d781', '159.223.220.70', 1696236638, '__ci_last_regenerate|i:1696236638;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('88deaee26971491d58f26dc75276002a0b52871c', '206.84.170.18', 1696493556, '__ci_last_regenerate|i:1696493556;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('96d229605b24a1a2a003e97b8f179e402fbe8339', '154.192.148.7', 1696503704, '__ci_last_regenerate|i:1696503704;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f603ee224ed74e8531852bbbaf8f4e5188dd3e97', '144.91.106.14', 1696646064, '__ci_last_regenerate|i:1696646064;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a708141db55988946b397fc11e6f0ce3d2c7ece1', '144.91.106.14', 1696646065, '__ci_last_regenerate|i:1696646065;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f92e7a18ad797abbe7b714337b360489ae8dd8b0', '144.91.106.14', 1696646065, '__ci_last_regenerate|i:1696646065;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('742270174ed3e52fbabbb8ce87be101bcedd4093', '144.91.106.14', 1696646065, '__ci_last_regenerate|i:1696646065;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c657397e3ea58d8d83aac39569bca1f45d45abe5', '144.91.106.14', 1696646066, '__ci_last_regenerate|i:1696646066;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('388e6dced0e6fa187fc16baee740c1b0e2e855fd', '144.91.106.14', 1696646067, '__ci_last_regenerate|i:1696646067;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9eb260da12c7c70bf7bd087db2d83f2e35bf5434', '144.91.106.14', 1696646067, '__ci_last_regenerate|i:1696646067;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('71379f348a1e0c81799d2a217e315ee9fabd079e', '144.91.106.14', 1696646067, '__ci_last_regenerate|i:1696646067;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e7a2b3ee298be7edb0a9a1dae189c399558a852b', '104.164.173.184', 1696664448, '__ci_last_regenerate|i:1696664448;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fefe729bb8f97df210c5172b4bded081aa709422', '3.94.250.16', 1696707637, '__ci_last_regenerate|i:1696707637;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3517bca1522dee463a709e223bb0be8bc9c0a83d', '79.104.53.14', 1696749411, '__ci_last_regenerate|i:1696749411;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e3123dd96f21a9583283b66ddd3f99340d31c19d', '79.104.53.14', 1696749411, '__ci_last_regenerate|i:1696749411;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bd3bc038ea7dae105297121cbb8c361134b56d8e', '79.104.53.14', 1696749411, '__ci_last_regenerate|i:1696749411;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3a0d47ce1c8418fb1468c89f53f2a2627c2927f0', '79.104.53.14', 1696749411, '__ci_last_regenerate|i:1696749411;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('87bab7560e68bd466644d1f6977044a5f09b59d3', '195.211.77.140', 1696749415, '__ci_last_regenerate|i:1696749415;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('640f35abd7fa1022951fcc9b43511caa7b39edb7', '195.211.77.142', 1696749461, '__ci_last_regenerate|i:1696749461;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c34e3180bbb3c303f96393f82e2f528b7ab4c8cc', '65.154.226.170', 1696749470, '__ci_last_regenerate|i:1696749470;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4854859f92b4f1b001cff0dfca19fc58a0462412', '65.154.226.170', 1696749471, '__ci_last_regenerate|i:1696749471;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d296f896bfd7761c0f43d3991cf20a2597b85c59', '154.28.229.93', 1696749475, '__ci_last_regenerate|i:1696749475;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4e8ce9739da04f0f3d4853053efa1ff0badc54a7', '128.199.62.55', 1696749523, '__ci_last_regenerate|i:1696749523;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('dd60e449cbbb2c7ebe32a4f475114f4b5f38b343', '138.197.88.136', 1696749523, '__ci_last_regenerate|i:1696749523;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3acf91ab685659c9ed475c1e77a2dc21f33e6be0', '128.199.62.55', 1696749523, '__ci_last_regenerate|i:1696749523;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('45224a33cf1ef9fe56b17c7369723d8d5eb73dd0', '138.197.88.136', 1696749524, '__ci_last_regenerate|i:1696749524;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2e787618a1edfeccea153254e40e0ffb826210da', '128.199.62.55', 1696749527, '__ci_last_regenerate|i:1696749527;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3dd397d7546a55effdc4fb4133b39e5d36461bb7', '138.197.88.136', 1696749527, '__ci_last_regenerate|i:1696749527;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('241f9d8e1e6325d8566661d07e8fd0d276b5702d', '146.70.132.221', 1696749917, '__ci_last_regenerate|i:1696749917;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3cb01041e2dd0638e7898f31a8e73f9b0fd9a0e7', '146.70.132.221', 1696749918, '__ci_last_regenerate|i:1696749918;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0e9c363289d620ba5d85dfc760c5123637f4641a', '79.104.53.14', 1696751647, '__ci_last_regenerate|i:1696751647;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f147238e9f0fd9310dfff1945b1689281dda81e3', '79.104.53.14', 1696751648, '__ci_last_regenerate|i:1696751648;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ea86a2378d6db2890a1706ef0e70e866eb5f3643', '79.104.53.14', 1696751648, '__ci_last_regenerate|i:1696751648;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1c444ea7f12b5f34c7f1d01bc30cf189b83a6689', '79.104.53.14', 1696751649, '__ci_last_regenerate|i:1696751649;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('31f4ac4132cc4f2d01f45405fd57a66ba2012893', '65.154.226.169', 1696753518, '__ci_last_regenerate|i:1696753518;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f5bf60e4efca85d43fe8181247bded7a768e507e', '65.154.226.169', 1696753523, '__ci_last_regenerate|i:1696753523;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2a57002a92a55ca8ad1af889c468c23bf9b7873c', '133.242.174.119', 1696760276, '__ci_last_regenerate|i:1696760276;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1d0cdb86350c9d0f8d73361cdab654a759330ead', '133.242.174.119', 1696760276, '__ci_last_regenerate|i:1696760276;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('001e8fca4e5115f376efa292c6939d14975c50a9', '205.169.39.132', 1696764146, '__ci_last_regenerate|i:1696764146;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b759386295293296429eb5feadf5bc6208d61652', '205.169.39.132', 1696764150, '__ci_last_regenerate|i:1696764150;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c5a7e9cb9944b475f00ba22177b9ca61f63dac76', '205.169.39.132', 1696764153, '__ci_last_regenerate|i:1696764153;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6d01e1fa3ad2b3cd011065e8e006863b8fd9d8c0', '205.169.39.132', 1696764154, '__ci_last_regenerate|i:1696764154;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e87bd8c62f2816b095e783c4518cce2365075049', '171.244.43.14', 1696776031, '__ci_last_regenerate|i:1696776031;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b59d53520b9f4e09c1cd972a1d071aec07e3ef41', '171.244.43.14', 1696776032, '__ci_last_regenerate|i:1696776032;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d4395dda13f39c7716a0c563d714e9322361d32d', '104.248.174.25', 1696778515, '__ci_last_regenerate|i:1696778515;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d9c23197df9df2a5b202c05aa9fd49ace72db1b2', '104.248.174.25', 1696778515, '__ci_last_regenerate|i:1696778515;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('edc6dd7310536ae31541ec69a3e51fc35f9094ac', '15.236.95.194', 1696788187, '__ci_last_regenerate|i:1696788187;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('121908d49849a5cea51a38a116fedb7ceab80e46', '47.254.85.182', 1696792866, '__ci_last_regenerate|i:1696792866;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5de77bfae383c49ffbd10c4cb5a40bfec232e5f2', '47.251.15.21', 1696792868, '__ci_last_regenerate|i:1696792868;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('00fe8505af08d166c3ee9b919729ab35a44cb9de', '45.90.62.250', 1696793305, '__ci_last_regenerate|i:1696793305;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ea11b5132624bfcd22af6f1a5a8484e55c1381dc', '176.53.223.199', 1696793306, '__ci_last_regenerate|i:1696793306;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('84e2c6bff8620cc4af4689f7580f01a82f837212', '27.115.124.45', 1696818372, '__ci_last_regenerate|i:1696818371;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d88b6a041639052a661cd95a5414eb325755033d', '106.75.148.115', 1696830565, '__ci_last_regenerate|i:1696830565;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0f7a5184ef986e158b5b8e35eef83096a1126021', '106.75.156.254', 1696833892, '__ci_last_regenerate|i:1696833892;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e06ef006f9dba6f1a9f41e986fd0d65389e3b930', '106.75.134.14', 1696833895, '__ci_last_regenerate|i:1696833895;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b39eeca1d86d0080feb14955780af12dfcd07fea', '106.75.134.14', 1696833897, '__ci_last_regenerate|i:1696833897;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4aa7477c1b2038652fc32ce6295a2fb0de9e66fc', '106.75.147.97', 1696834067, '__ci_last_regenerate|i:1696834067;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f63697f58e3d592ccbc0126b15d8aa0c3c8991e0', '106.75.147.97', 1696834071, '__ci_last_regenerate|i:1696834071;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1e72ee829b6b3e8ea89777c200f2fdff7e70c151', '176.53.221.202', 1696884343, '__ci_last_regenerate|i:1696884343;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('45314ad94c5431b847847124fd4a469f88e7c4f0', '176.53.216.7', 1696884344, '__ci_last_regenerate|i:1696884344;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('94a04dc6e917852761ab6bcc2ff21409ef3ce585', '58.65.201.165', 1696917992, '__ci_last_regenerate|i:1696917961;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f68b6300663c9133529b16768d043f53b60e7e54', '167.94.138.50', 1696931177, '__ci_last_regenerate|i:1696931177;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('67619f5d5a442761eb23d67c27f70eb55c9f5ab5', '167.94.138.50', 1696931178, '__ci_last_regenerate|i:1696931178;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ddc6ebcffebe3e99000c0775ac85dcaba50dc719', '58.65.201.165', 1696933996, '__ci_last_regenerate|i:1696933749;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('36b927e8157bed77b47d19f95d5fa851a0458273', '167.94.145.56', 1696942863, '__ci_last_regenerate|i:1696942863;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a0ef1f6fe38163af840c5a8a03a20b944d878d73', '167.94.145.56', 1696942870, '__ci_last_regenerate|i:1696942870;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('960d5bd8f8e60f1828100fe2c0498346805c5752', '205.169.39.159', 1696958774, '__ci_last_regenerate|i:1696958774;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9481e8e81a84be039d0bdc48d20a0a07c877e510', '205.169.39.159', 1696958775, '__ci_last_regenerate|i:1696958775;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e769684ff7e8c93ed5cdf5c92926312d7153c63e', '205.169.39.159', 1696958778, '__ci_last_regenerate|i:1696958778;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('90ad2e5a8b6bedac317517387b52aeca996a9134', '205.169.39.159', 1696958779, '__ci_last_regenerate|i:1696958779;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('5462b45b12b99d8e18a99b57ac175cc370af4d6b', '65.154.226.169', 1696979996, '__ci_last_regenerate|i:1696979996;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('595e2b8fd079bf0396bc128aa3691e477a8c3a0d', '65.154.226.169', 1696979996, '__ci_last_regenerate|i:1696979996;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('13912664c3c70d54a5a2c8b84ab6bda018db35e2', '35.180.118.27', 1696993815, '__ci_last_regenerate|i:1696993815;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a6dcd351324eac89aed92d9e9e1c93c27a056bb5', '3.250.145.25', 1697039611, '__ci_last_regenerate|i:1697039611;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3254ccc5f14fa009a8b119913daf7368c709df48', '182.191.90.180', 1697090408, '__ci_last_regenerate|i:1697090408;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b14e254cc71f209a597d42b9149874b30cf4ef44', '198.235.24.246', 1697143605, '__ci_last_regenerate|i:1697143605;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('3ed6c232db12c4fe09d6c2bef9c0606150d97a23', '146.190.242.154', 1697245186, '__ci_last_regenerate|i:1697245186;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('952c28ae6adfbd1d636646f3461ba44345a938b3', '146.190.242.154', 1697245186, '__ci_last_regenerate|i:1697245186;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('6f1cf25e014555e47957c8907baec700f3faa5bd', '138.197.159.82', 1697245214, '__ci_last_regenerate|i:1697245214;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('69cd07ab90997870c6895f8190de2bbb153dd21a', '138.197.159.82', 1697245214, '__ci_last_regenerate|i:1697245214;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a93be0f57fc920a4e2bf44b510d32d10026d226c', '198.235.24.28', 1697266072, '__ci_last_regenerate|i:1697266072;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e32c9a9668813a1565db9643d12997f66c70abfe', '198.235.24.28', 1697266073, '__ci_last_regenerate|i:1697266073;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('10ed9408e1227c7c8658fc9c642442f41e79a3c4', '205.210.31.45', 1697276826, '__ci_last_regenerate|i:1697276826;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('cfc9e3153fc9d568985429081947bc2ba4255695', '54.180.24.59', 1697342855, '__ci_last_regenerate|i:1697342855;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('c1dbe876a9f4243735f3570b0cac6c13bcc342d4', '205.210.31.15', 1697363416, '__ci_last_regenerate|i:1697363416;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('4c3f5cdf9176bab94ab25dd6ef515979a0034e81', '205.210.31.15', 1697363416, '__ci_last_regenerate|i:1697363416;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bae3aeed6a4459bc795a0e56d369d5c161fe72ab', '205.210.31.185', 1697376688, '__ci_last_regenerate|i:1697376688;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b72fee99a18494ccbca69c572cc599609f5a8505', '205.210.31.185', 1697376688, '__ci_last_regenerate|i:1697376688;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('f05c874ab3a3e529dba1b24b235d68d99805d1bd', '205.210.31.156', 1697381790, '__ci_last_regenerate|i:1697381790;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('b6217d872e465c0379f1b9991a5552c72ba867ff', '205.210.31.156', 1697381790, '__ci_last_regenerate|i:1697381790;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('bcd17c021497b9f1fb72e36c11d7452fd15cea22', '209.38.232.195', 1697424279, '__ci_last_regenerate|i:1697424279;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('2828e3b9917748f5e088897bfa5d6cf8e19d90da', '209.38.232.195', 1697424279, '__ci_last_regenerate|i:1697424279;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('52e10b8781daaff30ffa1930dd2a3068d12e0b3a', '205.210.31.91', 1697506793, '__ci_last_regenerate|i:1697506793;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('1b6d7b442306eba6192222d915fcab487f4eed28', '198.235.24.251', 1697536660, '__ci_last_regenerate|i:1697536660;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('ab0d849f63a549647d9de87708b64f71726f3575', '205.210.31.159', 1697586478, '__ci_last_regenerate|i:1697586478;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9d6ef7cc71e42bab9fda908c864cf21de9abf4e1', '205.210.31.110', 1697607714, '__ci_last_regenerate|i:1697607714;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('9815ff6e6336e683bc60cce325517e69b73a7cb6', '72.13.62.27', 1697673257, '__ci_last_regenerate|i:1697673257;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('a10bdd089391a1d26536c4b436cb55a0199fa8be', '58.65.201.165', 1697703116, '__ci_last_regenerate|i:1697703116;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('65c41c3660fd1470f252ad25a25568e66f7ac03b', '58.65.201.165', 1697702825, '__ci_last_regenerate|i:1697702825;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('304e863857f8ac69814d18dc88e8691a9dc12bad', '58.65.201.165', 1697703159, '__ci_last_regenerate|i:1697702863;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('14e9f6ddbc9b18078915a7e2394f91c51aed7456', '58.65.201.165', 1697703631, '__ci_last_regenerate|i:1697703631;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('0b8782c6279a161aa1b6982610f1b7cbd1afd073', '58.65.201.165', 1697703695, '__ci_last_regenerate|i:1697703631;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('e53916b1520c2240fba9a714c7979137013cbe12', '23.22.35.162', 1697713333, '__ci_last_regenerate|i:1697713333;');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8cc7427228bfe048520acf56d3cd3ddbc34cc59d', '58.65.201.165', 1697778321, '__ci_last_regenerate|i:1697778304;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('8bc92664d0ad3f32f9a825ea5854501736f9428c', '58.65.201.165', 1697800231, '__ci_last_regenerate|i:1697800231;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('d3da3b93700514b687f474161cd46509a94531b7', '58.65.201.165', 1697800318, '__ci_last_regenerate|i:1697800231;username|s:15:\"admin@gmail.com\";userid|s:1:\"1\";empid|s:1:\"1\";groupid|s:1:\"1\";cityid|s:1:\"1\";');


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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `db_backups` (`backup_id`, `backup_file`, `backup_date`, `user_id`, `create_on`) VALUES (1, 'backup-on-18-08-2023-15-06-04.sql', '2023-08-18', 1, '2023-08-18 05:06:04');


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
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (31, 'Mehboob Alam', '', NULL, 'nill', 'nil', NULL, NULL, 'male', NULL, '0', NULL, NULL, 'muhammad.mehboobalam@wsspeshawar.org.pk', NULL, NULL, NULL, NULL, 3, 5, NULL, NULL, NULL, 1, 1, 2);
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
INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_f_name`, `emp_pic`, `emp_curr_address`, `emp_per_address`, `dob`, `cnic_id`, `geneder`, `marital_status`, `phone`, `mobile`, `personel_no`, `email`, `entry_user`, `entry_date_time`, `update_user`, `update_date_time`, `department_id`, `designation_id`, `division_id`, `district_id`, `type_emp`, `emp_status_id`, `city_id`, `organization_id`) VALUES (60, 'Muhammad Khalil Akbar', '', NULL, '', '', NULL, NULL, 'male', NULL, '0310-1333483', NULL, NULL, 'muhammad.khalil@wsscm.org.pk', NULL, NULL, NULL, NULL, 2, 5, NULL, NULL, NULL, 1, 5, 10);
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO `ipc_payment` (`ipc_payment_id`, `ipc_payment_date`, `ipac_id`, `status_id`) VALUES (4, '2023-07-31', 3, 2);
INSERT INTO `ipc_payment` (`ipc_payment_id`, `ipc_payment_date`, `ipac_id`, `status_id`) VALUES (5, '0000-00-00', 4, 0);
INSERT INTO `ipc_payment` (`ipc_payment_id`, `ipc_payment_date`, `ipac_id`, `status_id`) VALUES (6, '0000-00-00', 5, 0);
INSERT INTO `ipc_payment` (`ipc_payment_id`, `ipc_payment_date`, `ipac_id`, `status_id`) VALUES (7, '0000-00-00', 10, 0);
INSERT INTO `ipc_payment` (`ipc_payment_id`, `ipc_payment_date`, `ipac_id`, `status_id`) VALUES (8, '0000-00-00', 11, 0);


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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO `items` (`item_id`, `item_name`, `ipc_id`, `status_id`) VALUES (1, 'abcedf', 0, 0);
INSERT INTO `items` (`item_id`, `item_name`, `ipc_id`, `status_id`) VALUES (2, 'kkk', 1, 0);
INSERT INTO `items` (`item_id`, `item_name`, `ipc_id`, `status_id`) VALUES (3, 'abc', 2, 0);
INSERT INTO `items` (`item_id`, `item_name`, `ipc_id`, `status_id`) VALUES (4, 'fgdfg', 2, 0);
INSERT INTO `items` (`item_id`, `item_name`, `ipc_id`, `status_id`) VALUES (5, 'steel work done', 2, 1);
INSERT INTO `items` (`item_id`, `item_name`, `ipc_id`, `status_id`) VALUES (6, 'Steel ', 3, 1);
INSERT INTO `items` (`item_id`, `item_name`, `ipc_id`, `status_id`) VALUES (8, 'tube well', 3, 0);


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
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

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
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (36, '1', 'Earth Works including Scarification and excavation', '227052655.93', 1, 1, 12, 1, 8);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (37, '2', 'Pips and Filling and Marker Tap', '1535727495.62', 1, 1, 12, 2, 8);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (38, '3', 'Construction of RCC Manholes,House Construction, backdrop Manholes & Open Drain', '2240057949.26', 1, 1, 12, 3, 8);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (39, '3a', 'Concrete Surround and Concrete on Joints', '346248675', 1, 1, 12, 4, 8);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (40, '4', 'Flushing Truck ', '40029000', 1, 1, 12, 5, 8);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (41, '5', 'Road Repair', '475158675.57', 1, 1, 12, 6, 8);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (42, '6.1', 'Provision,Installation and Commissioning of Energization Solution, as approved by the Employer, for the complete Lot', '380562047', 1, 2, 12, 7, 8);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (43, '6.2', 'Health & Safety (H&S), Enviromental Management Plan (EMP) and Traffic Management Plan(TMP)', '27145000', 1, 2, 12, 8, 8);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (44, '6.3', 'Provision of Engineering Testing Laboratory Equipment + Purchasing of Vehicles for Res, AREs and Support Staffs including Registration, POL, Maintenance and Salaries of Drivers', '75360000', 1, 2, 12, 9, 8);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (45, '6.4', 'Utility Diversion of the existing Utility lines, including Geographical Survey, replacing the damaged pipe/Material complete in all respects as per drawings and as per site situation and as per the directed by engineer', '150000000', 1, 2, 12, 10, 8);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (46, '6.5', 'Temporary disposal of the Sewerage construction area including laying of Temporary Pipes. Septic Tank and all other required material, complete and as per the directed by engineer', '190000000', 1, 2, 12, 11, 8);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (47, '1', 'WASTEWATER SCREEN CHAMBER', '50.91692', 1, 1, 12, 1, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (48, '2', 'PUMPING STATION', '125.888364', 1, 1, 12, 2, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (49, '3', 'GRIT CHAMBER', '23.287453', 1, 1, 12, 3, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (50, '4', 'PRIMARY SETTLING TANK', '153.100876', 1, 1, 12, 4, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (51, '5', 'PRIMARY SLUDGE PUMPING STATION', '23.080767', 1, 1, 12, 5, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (52, '6', 'AERATION TANK', '357.567968', 1, 1, 12, 6, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (53, '7', 'SECONDARY SETTLING TANK', '207.809588', 1, 1, 12, 7, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (54, '8', 'SECONDARY SLUDGE / RAS PUMPING STATION', '37.271799', 1, 1, 12, 8, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (55, '9', 'SLUDGE THICKENER', '80.918042', 1, 1, 12, 9, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (56, '10', 'THICKENED SLUDGE PUMPING STATION', '20.617835', 1, 1, 12, 10, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (57, '11', 'SLUDGE DRYING BEDS', '89.229445', 1, 1, 12, 11, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (58, '12', 'BLOWER ROOM NO. 2', '80.970948', 1, 1, 12, 12, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (59, '13', 'ADMIN BUILDING', '72.497527', 1, 1, 12, 13, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (60, '14', 'WORKSHOP', '17.035034', 1, 1, 12, 14, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (61, '15', 'GUARD ROOM', '2.772718', 1, 1, 12, 15, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (62, '16', 'SUB STATION BUILDING', '23.529293', 1, 1, 12, 16, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (63, '17', 'GENERATOR ROOM', '108.700257', 1, 1, 12, 17, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (64, '18', 'ELECTRICAL CONTROL ROOM', '75.384812', 1, 1, 12, 18, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (65, '19', 'STAFF BUILDING', '3.024162', 1, 1, 12, 19, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (66, '20', 'MAIN GATE & BOUNDRY WALL', '61.876911', 1, 1, 12, 20, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (67, '21', 'STORM WATER DRAINAGE', '59.412816', 1, 1, 12, 21, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (68, '22', 'INTERNAL ROAD WORK & LANDSCAPING', '59.414352', 1, 1, 12, 22, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (69, '22-A', 'OPERATION & MAINTENANCE OF ENTIRE STP & CLIENT STAFF', '48', 1, 1, 12, 23, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (70, '23', 'PROCESS PIPELINES (WASTEWATER)', '286.59359', 1, 1, 12, 24, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (71, '24', 'PLANT WATER SUPPLY & SEWERAGE COLLECTION NETWORK', '6.567525', 1, 1, 12, 25, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (72, '25', 'EXTERNAL ELECTRIFICATION', '233.8862', 1, 1, 12, 26, 9);
INSERT INTO `ppms_billsummary` (`billsummary_id`, `billsummary_no`, `billsummary_desc`, `billsummary_amt`, `billsummary_cw`, `billsummary_category_id`, `subproject_id`, `sid`, `sub_sub_project_id`) VALUES (73, '26', 'SCADA SYSTEM', '186.64367', 1, 1, 12, 27, 9);


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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

INSERT INTO `ppms_ipac` (`ipac_id`, `ipac_amount`, `subproject_id`, `ipac_submitted_date`, `ipc_no`, `sub_sub_project_id`, `certificate_type`) VALUES (3, '217879515.93', 6, '2023-03-07', 'IPC - 01', 5, 'IPA/IPC');
INSERT INTO `ppms_ipac` (`ipac_id`, `ipac_amount`, `subproject_id`, `ipac_submitted_date`, `ipc_no`, `sub_sub_project_id`, `certificate_type`) VALUES (5, '378631141.44', 6, '2023-06-16', 'IPC 02', 0, 'IPA/IPC');
INSERT INTO `ppms_ipac` (`ipac_id`, `ipac_amount`, `subproject_id`, `ipac_submitted_date`, `ipc_no`, `sub_sub_project_id`, `certificate_type`) VALUES (10, '225705079', 11, '2023-06-19', 'IPC 02', 0, 'IPA/IPC');
INSERT INTO `ppms_ipac` (`ipac_id`, `ipac_amount`, `subproject_id`, `ipac_submitted_date`, `ipc_no`, `sub_sub_project_id`, `certificate_type`) VALUES (11, '100000', 11, '2023-09-27', '01', 0, 'IPA/IPC');


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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

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
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (34, 5, '2023-06-27', 3, 55, 0, 2, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (37, 10, '2023-06-19', 6, 41, 0, 0, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (38, 10, '2023-08-01', 6, 41, 0, 1, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (39, 10, '2023-08-01', 3, 41, 0, 2, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (40, 10, '2023-08-01', 3, 57, 0, 1, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (41, 10, '2023-08-01', 7, 57, 0, 2, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (42, 10, '2023-08-01', 7, 42, 0, 1, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (43, 10, '2023-08-01', 3, 42, 1, 2, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (44, 11, '2023-09-27', 6, 41, 0, 0, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (45, 11, '2023-09-27', 6, 41, 0, 1, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (46, 11, '2023-09-27', 2, 41, 1, 2, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (47, 5, '2023-10-19', 3, 1, 0, 1, 0);
INSERT INTO `ppms_ipac_forward` (`ipac_forward_id`, `ipac_id`, `ipac_forward_date`, `organization_id`, `user_id`, `flag_id`, `status_id`, `sub_sub_project_id`) VALUES (48, 5, '2023-10-19', 4, 1, 1, 2, 0);


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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

INSERT INTO `ppms_ipac_remarks` (`ipac_remarks_id`, `ipac_id`, `ipac_remark`, `ipac_remark_date`, `ipac_remark_userid`) VALUES (5, 3, 'IPA Submitted ', '2023-03-07', 55);
INSERT INTO `ppms_ipac_remarks` (`ipac_remarks_id`, `ipac_id`, `ipac_remark`, `ipac_remark_date`, `ipac_remark_userid`) VALUES (6, 3, 'yes', '0000-00-00', 57);
INSERT INTO `ppms_ipac_remarks` (`ipac_remarks_id`, `ipac_id`, `ipac_remark`, `ipac_remark_date`, `ipac_remark_userid`) VALUES (8, 5, 'IPA Submitted', '2023-06-16', 55);
INSERT INTO `ppms_ipac_remarks` (`ipac_remarks_id`, `ipac_id`, `ipac_remark`, `ipac_remark_date`, `ipac_remark_userid`) VALUES (12, 10, 'IPA Submitted', '2023-06-19', 41);
INSERT INTO `ppms_ipac_remarks` (`ipac_remarks_id`, `ipac_id`, `ipac_remark`, `ipac_remark_date`, `ipac_remark_userid`) VALUES (13, 3, 'yes ', '0000-00-00', 1);
INSERT INTO `ppms_ipac_remarks` (`ipac_remarks_id`, `ipac_id`, `ipac_remark`, `ipac_remark_date`, `ipac_remark_userid`) VALUES (14, 3, 'working', '2023-08-08', 1);
INSERT INTO `ppms_ipac_remarks` (`ipac_remarks_id`, `ipac_id`, `ipac_remark`, `ipac_remark_date`, `ipac_remark_userid`) VALUES (16, 11, 'jdf', '2023-09-27', 41);


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
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

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
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (23, 28, '55555', 3, 6, 6);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (24, 21, '0', 3, 6, 5);
INSERT INTO `ppms_ipc_billsummary` (`ipc_billsummary_id`, `billsummary_id`, `ipc_bs_amount`, `ipc_id`, `subproject_id`, `sub_subproject_id`) VALUES (25, 26, '0', 3, 6, 5);


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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO `ppms_subproject_area` (`project_area_id`, `project_area_name`, `subproject_id`) VALUES (1, 'Lot-04A', 10);
INSERT INTO `ppms_subproject_area` (`project_area_id`, `project_area_name`, `subproject_id`) VALUES (2, 'Women Business Development & Community Center', 2);
INSERT INTO `ppms_subproject_area` (`project_area_id`, `project_area_name`, `subproject_id`) VALUES (3, 'Sport Complex', 2);
INSERT INTO `ppms_subproject_area` (`project_area_id`, `project_area_name`, `subproject_id`) VALUES (4, 'Lot-01 Lot-01', 4);
INSERT INTO `ppms_subproject_area` (`project_area_id`, `project_area_name`, `subproject_id`) VALUES (5, 'Besai Park Hayatabad, Peshawar', 6);
INSERT INTO `ppms_subproject_area` (`project_area_id`, `project_area_name`, `subproject_id`) VALUES (6, 'Bagh-e-Naran Extension', 6);
INSERT INTO `ppms_subproject_area` (`project_area_id`, `project_area_name`, `subproject_id`) VALUES (7, 'Health & Safety (H&S) Environmental Management Plan & Traffic Management Plan (TMP)', 6);
INSERT INTO `ppms_subproject_area` (`project_area_id`, `project_area_name`, `subproject_id`) VALUES (8, 'Catchment Area of Rorya STP Mardan Including New Sewage Treatment Plant (STP) & required (Sewerage S', 12);
INSERT INTO `ppms_subproject_area` (`project_area_id`, `project_area_name`, `subproject_id`) VALUES (9, 'Catchment Area of Rorya STP Mardan including New Sewage Treatment Plant (STP) & Required SCADA (STP)', 12);


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
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (26, 31, 'muhammad.mehboobalam@wsspeshawar.org.pk', '202cb962ac59075b964b07152d234b70', 4, NULL, 1);
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
INSERT INTO `user_new` (`user_id`, `emp_id`, `user_name`, `user_password`, `group_id`, `user_status`, `city_id`) VALUES (48, 60, 'muhammad.khalil@wsscm.org.pk', '202cb962ac59075b964b07152d234b70', 3, NULL, 5);
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


