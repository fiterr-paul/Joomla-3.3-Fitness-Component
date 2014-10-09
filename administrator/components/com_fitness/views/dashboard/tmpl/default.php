<?php
/**
 * @version     1.0.0
 * @package     com_fitness
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Nikolay Korban <niklug@ukr.net> - http://
 */


// no direct access
defined('_JEXEC') or die;

include JPATH_COMPONENT_ADMINISTRATOR . DS . 'views' . DS . 'dashboard' . DS .'tmpl' . DS . 'main_menu.php'; 

?>
<table border="0" width="100%" >

    <tbody>
        <tr>
            <td style="width:350px">
                <table border="0" width="100%">
                    <tbody>
                        <tr>
                            <td>
                                <a class="dashboard_icon" id="clients_href" href="index.php?option=com_fitness&view=client_summary" title="Client Overview"></a>
                            </td>
                            <td>
                                <a class="dashboard_icon" id="goals_href"  href="index.php?option=com_fitness&view=goals" title="Client Planning"></a>
                            </td>
                            <td>
                                <a class="dashboard_icon" id="progress_href"  href="index.php?option=com_fitness&view=client_progress" title="Client Progress"></a>
                            </td>
                            <td>
                                <a class="dashboard_icon" id="assessments_href"  href="index.php?option=com_fitness&view=assessments" title="Assessments"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="dashboard_icon" id="calendar_href" title="Calendar" href="index.php?option=com_multicalendar&view=admin&task=admin"></a>
                            </td>
                            <td>
                                <a class="dashboard_icon" id="programs_href"  href="index.php?option=com_fitness&view=programs" title="Programs"></a>
                            </td>
                            <td>
                                <a class="dashboard_icon" id="programs_tempates_href"  href="index.php?option=com_fitness&view=programs_templates" title="Program Templates"></a>
                            </td>
                            <td>
                                <a class="dashboard_icon" id="exercise_href"  href="index.php?option=com_fitness&view=exercise_library" title="Exercise Library"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="dashboard_icon" id="nutrition_plans_href"  href="index.php?option=com_fitness&view=nutrition_plans" title="Nutrition Plans"></a>
                            </td>
                            <td>
                                <a class="dashboard_icon" id="nutrition_diary_href"  href="index.php?option=com_fitness&view=nutrition_diaries" title="Nutrition Diary"></a>
                            </td>
                            <td>
                                <a class="dashboard_icon" id="recipe_database_href"  href="index.php?option=com_fitness&view=nutrition_recipes" title="Recipe Database"></a>
                            </td>
                            <td>
                                <a class="dashboard_icon" id="nutrition_database_href"  href="index.php?option=com_fitness&view=nutritiondatabases" title="Nutrition Database"></a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <a class="dashboard_icon" id="profiles_href"  href="index.php?option=com_fitness&view=clients" title="Profiles"></a>
                            </td>
                            <td>
                                <a class="dashboard_icon" id="settings_href"  href="index.php?option=com_fitness&view=settings" title="Settings"></a>
                            </td>
                            <td>
                                <a class="dashboard_icon" id="add_new_client_href"  href="#" title="Add New Client"></a>
                            </td>
                            <td>
                                <a class="dashboard_icon" id="add_new_trainer_href"  href="#" title="Add New Trainer"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td style="vertical-align: top;">
                <fieldset class="container-fluid" style="margin-top:5px;background-color: #f4f4f4; border: 1px solid #ccc;  border-radius: 10px; padding: 5px;">
                    <h3>Notifications</h3>
                    <div class="notifications_container " style="background-color:#fff;height:100%;">
                        
                    </div>
                </fieldset>
            </td>
        </tr>
    </tbody>
</table>
