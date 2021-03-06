<?php
    namespace HelperClasses;
    use App\Models\UserGroup;
    use App\Models\SystemTask;
    use Illuminate\Support\Facades\Auth;
    class ModuleTaskHelper
    {
        public static $MAX_MODULE_ACTIONS=9;
        public static function get_permissions($controller_name)
        {
            $user_group_id=3;
            if(Auth::user())
            {
                $user_group_id=Auth::user()->user_group_id;
            }
            $permissions=array();
            $query=UserGroup::where('id', $user_group_id);  
            for($i=0;$i<self::$MAX_MODULE_ACTIONS;$i++) 
            {
                $permissions['action_'.$i]=0;
                $query->addselect('action_'.$i);
            }
            $userGroup=$query->first();
            $task=SystemTask::where('controller', $controller_name)->select('id')->first();
            if($task && $userGroup)
            {
                for($i=0;$i<self::$MAX_MODULE_ACTIONS;$i++) 
                {
                    if(strpos($userGroup->{'action_'.$i}, ','.$task->id.',')!==false)
                    {
                        $permissions['action_'.$i]=1;
                    }
                }
            }

            //$userGroup=UserGroup::where('id', $user_group_id)->first();
            return $permissions;
            /*$CI = & get_instance();
            $user=User_helper::get_user();
            $CI->db->from($CI->config->item('table_system_user_group_role').' ugr');
            $CI->db->select('ugr.*');
    
            $CI->db->join($CI->config->item('table_system_task').' task','task.id = ugr.task_id','INNER');
            $CI->db->where("controller",$controller_name,"after");
            $CI->db->where("user_group_id",$user->user_group);
            $CI->db->where("revision",1);
            $result=$CI->db->get()->row_array();
            return $result;*/
        }
    }
    