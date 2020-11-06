-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 10:28 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `disease_id` varchar(10) NOT NULL,
  `disease_name` varchar(255) NOT NULL,
  `disease_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`disease_id`, `disease_name`, `disease_desc`) VALUES
('d1', 'Periodontal Abscess', 'infection that is located around the periodontal pocket as well as can resulting in ligament damage periodontal and alveolar bone'),
('d10', 'Caries Media', 'extensive structural defect. Caries has penetrated up to the dentin and spreads two-dimensionally beneath the enamel defect where the dentin offers little resistance'),
('d11', 'Caries Profunda', 'deep structural defect. Caries has penetrated up to the dentin layers of the tooth close to the pulp'),
('d12', 'Caries Superficial', 'enamel caries, wedge-shaped structural defect. Caries has affected the enamel layer, but has not yet penetrated the dentin'),
('d13', 'Candidiasis', 'an infection caused by a species of the yeast Candida, usually Candida albicans'),
('d14', 'Calculus (dental)', 'a form of hardened dental plaque'),
('d15', 'Pulp Necrosis', 'a clinical diagnostic category indicating the death of cells and tissues in the pulp chamber of a tooth with or without bacterial invasion'),
('d16', 'Periodontitis', 'inflammation of the tissue around the teeth, often causing shrinkage of the gums and loosening of the teeth'),
('d2', 'Peripical Abscess', 'a collection of pus at the root of a tooth, usually caused by an infection that has spread from a tooth to the surrounding tissues'),
('d3', 'Alveolar Osteitis', 'a painful dental condition that sometimes happens after you have a permanent adult tooth extracted. Dry socket is when the blood clot at the site of the tooth extraction fails to develop, or it dislodges or dissolves bIefore the wound has healed'),
('d4', 'Dental Abrasion', 'is another form of dental damage caused by the forces applied to the teeth. Rather than being caused by tooth on tooth contact, abrasion is typically caused by outside elements, like aggressively brushing the teeth'),
('d5', 'Bruxism', 'the involuntary gnashing, grinding, or clenching of teeth. It is usually an unconscious activity, whether the individual is awake or asleep'),
('d6', 'Gingivitis', 'a common and mild form of gum disease (periodontal disease) that causes irritation, redness and swelling (inflammation) of your gingiva, the part of your gum around the base of your teeth'),
('d7', 'Infected Teeth', 'a pocket of pus that can form in different parts of a tooth as a result of a bacterial infection. It’s sometimes called a dental abscess. An abscessed tooth causes moderate to severe pain that can sometimes radiate to your ear or neck'),
('d8', 'Pain at the rear teeth', 'sinus infection can be referred to the rear teeth pain which mean can cause a toothache ,specifically in the upper rear teeth, which are close to the sinuses'),
('d9', 'Angular Ceilitis', 'inflammation and fissuring radiating from the commissures (angles) of the mouth secondary to predisposing factors such as nutritional deficiencies, atopic dermatitis, or Candida albicans (yeast) infection. Also called angular stomatitis, commissural cheilitis, or perlèche');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` varchar(10) NOT NULL,
  `question` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question`, `picture`) VALUES
('q1', 'Are you having difficulty chewing food?', 'chew.png'),
('q10', 'Is there bones seen in dental socket?', 'dental_bone.png'),
('q11', 'Does your teeth feel painful and sensitive?', 'pain_tooth.jpg'),
('q12', 'Is your tooth eroded?', 'eroded_teeth.png'),
('q13', 'Do you have headache?', 'headache.png'),
('q14', 'Do you have insomnia?', 'insomnia.png'),
('q15', 'Is there the sound of teeth crunching during sleep?', 'crunching_teeth.png'),
('q16', 'Does your gums bleed easily?', 'bleeding_gums.png'),
('q17', 'Is the shape of your gum round?', 'round_gum.png'),
('q18', 'Does your gums feel soft?', 'soft_gum.png'),
('q19', 'Are your teeth or gum suppurating?', 'suppurating_gums.png'),
('q2', 'Is there swelling or inflammation of the gums?', 'inflammation_gum.png'),
('q20', 'Do you have tooth aches?', 'toothache.jpg'),
('q21', 'Do you have redness on the corners of the mouth?', 'lips.png'),
('q22', 'Is the corner of your mouth feeling painful?', 'lips.png'),
('q23', 'Do you have scaly mouth corners?', 'scaly_lips.jpg'),
('q24', 'Do you have ulcer?', 'ulcer_mouth.jpg'),
('q25', 'Can your dentin be seen?', 'dentin.png'),
('q26', 'Do you have cavities?', 'cavities.png'),
('q27', 'Do you have infected pulp?', 'infected_pulp.jpg'),
('q28', 'Is there any pain without stimulation?', 'tooth_pain.png'),
('q29', 'Do you have white spots on your teeth?', 'whitespots.png'),
('q3', 'Do you have shaky teeth?', 'shaky_tooth.png'),
('q30', 'Do you have white patches on your tongue?', 'tongue.png'),
('q31', 'Do you have white patches on your oral cavity?', 'oral_cavity.png'),
('q32', 'Do you have plaque deposits?', 'plaque.png'),
('q33', 'Do you have Tartar?', 'tartar.png'),
('q34', 'Do you have tooth decay?', 'tooth_decay.png'),
('q35', 'Is your pulp is numb?', 'numb_pulp.png'),
('q36', 'Is your pulp chamber is open?', 'open_pulp.png'),
('q37', 'Is your gums red?', 'red_gum.png'),
('q4', 'Is there swelling of the jaw?', 'swelling_jaw.png'),
('q5', 'Do you have fever?', 'fever.png'),
('q6', 'Is there swollen lymph nodes around jaw or neck?', 'swollen_lymp.png'),
('q7', 'Is there bad breathe?', 'bad_breath.svg'),
('q8', 'Do you have Pain or tenderness around the gums?', 'pain_gums.png'),
('q9', 'Is there severe pain for several days after tooth extraction?', 'tooth_removal.png');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `disease` text NOT NULL,
  `symptoms` text NOT NULL,
  `definitions` text NOT NULL,
  `treatments` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `user_id`, `disease`, `symptoms`, `definitions`, `treatments`, `created_at`) VALUES
(52, 7, ' Periodontal Abscess.', '1. Hard to chew<br>2. Swelling  or inflammation  of the gums<br>3. Shaky Teeth<br>', '<b>Periodontal Abscess</b> is infection that is located around the periodontal pocket as well as can resulting in ligament damage periodontal and alveolar bone.<br>', '<b>Periodontal Abscess</b> : Open up (incise) and drain the abscess. The dentist will make a small cut into the abscess, allowing the pus to drain out, and then wash the area with salt water (saline).<br>', '2019-12-17 14:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `symptom_id` varchar(10) NOT NULL,
  `symptom_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`symptom_id`, `symptom_desc`) VALUES
('s1', 'Hard to chew'),
('s10', 'Bones seen in socket'),
('s11', 'Teeth feel painful and sensitive'),
('s12', 'Eroded tooth'),
('s13', 'Headache'),
('s14', 'Insomnia or feeling restless'),
('s15', 'The sound of teeth crunching during sleep'),
('s16', 'Gums bleed easily'),
('s17', 'The shape of the gum is round'),
('s18', 'The consistency of the gums becomes soft'),
('s19', 'Gum or suppurating teeth'),
('s2', 'Swelling  or inflammation  of the gums'),
('s20', 'Tooth aches or throbbing'),
('s21', 'Redness on the corners of the mouth'),
('s22', 'The corner of the mouth feel painful'),
('s23', 'Scaly mouth corners'),
('s24', 'Ulcer (wound in the corner of the mouth)'),
('s25', 'Dentin Seen'),
('s26', 'Cavity'),
('s27', 'Infected pulp/inflammation of the pulp'),
('s28', 'Throbbing pain without stimulation'),
('s29', 'White spots on teeth'),
('s3', 'Shaky Teeth'),
('s30', 'White patches on tongue'),
('s31', 'White patches on the oral cavity'),
('s32', 'Plaque deposits'),
('s33', 'There is Tartar'),
('s34', 'Tooth decay'),
('s35', 'Pulp is numb'),
('s36', 'The pulp chamber is open'),
('s37', 'Red gum'),
('s4', 'Swelling of the jaw'),
('s5', 'Fever'),
('s6', 'Swollen lymph nodes around jaw or neck'),
('s7', 'Bad Breath'),
('s8', 'Pain or tenderness around the gums'),
('s9', 'Severe pain for several days after tooth extraction');

-- --------------------------------------------------------

--
-- Table structure for table `treatments`
--

CREATE TABLE `treatments` (
  `treatment_id` varchar(10) NOT NULL,
  `treatment_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatments`
--

INSERT INTO `treatments` (`treatment_id`, `treatment_desc`) VALUES
('t1', 'Open up (incise) and drain the abscess. The dentist will make a small cut into the abscess, allowing the pus to drain out, and then wash the area with salt water (saline)'),
('t10', 'Fluoride treatments'),
('t11', 'Use dental fillings'),
('t12', 'Root canal treatment'),
('t13', 'Treated with an oral anti-fungal drug such as fluconazole'),
('t14', 'Do brushing twice daily with a fluoride toothpaste and flossing once daily'),
('t15', 'Root canal treatment'),
('t16', 'Root planing smoothens the root surfaces, discouraging further buildup of tartar and bacteria'),
('t2', 'Open up (incise) and drain the abscess. The dentist will make a small cut into the abscess, allowing the pus to drain out, and then wash the area with salt water (saline)'),
('t3', 'Control the pain with a dressing material and use postoperative analgesics such as NSAIDs'),
('t4', 'Correcting tooth brushing habits and avoiding the very frequent consumption of excessively acidic substances such as lemons'),
('t5', 'Prescribing muscle relaxants'),
('t6', 'Use antibacterial toothpaste,brush your teeth more effectively and use an Antibacterial Mouthwashand'),
('t7', 'Tooth extractions'),
('t8', 'Rinse using saltwater and using painkillers'),
('t9', 'Lip balm or thick emollient ointment, applied frequently and topical antiseptics');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `job` varchar(25) NOT NULL,
  `age` int(3) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `phone_number`, `email_address`, `password`, `gender`, `job`, `age`, `role`) VALUES
(1, 'Muhammad Fikrun Amin', 1133389345, 'fikrun65@gmail.com', '$2y$10$nOREkLhkQYT9gKC3c.lDVOPEGHAmkHbxSIkJGJN2vYpyczhKfQ.1a', 'male', 'Student', 20, 'admin'),
(7, 'Anonymous', 123456789, 'anonym@email.com', '$2y$10$EXlY7m4c4d1tyjLsgQ2dAOhzOTNDM/Ui6l2xhIBE9YY1oNASOdh5y', 'male', 'Student', 20, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `FK_User` (`user_id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`symptom_id`);

--
-- Indexes for table `treatments`
--
ALTER TABLE `treatments`
  ADD PRIMARY KEY (`treatment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `FK_User` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
