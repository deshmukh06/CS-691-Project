<?php

namespace App\Controller\Component;

use Cake\Controller\Component;

class CommonFunctionsComponent extends Component {

    public function getPermissions() {
        $this->getController()->loadModel('Permissions');

        $permissions = [];

        $data = $this->getController()->Permissions->find('all');

        if ($data) {
            $data = $data->toArray();

            foreach ($data as $record) {
                $permissions[$record['id']] = $record['title'];
            }
        }

        return $permissions;
    }

    public function getRoles() {
        $this->getController()->loadModel('Roles');

        $roles = [];

        $data = $this->getController()->Roles->find('all');

        if ($data) {
            $data = $data->toArray();

            foreach ($data as $record) {
                $roles[$record['id']] = $record['title'];
            }
        }

        return $roles;
    }

    public function getDepartments() {
        $this->getController()->loadModel('Departments');

        $departments = [];

        $data = $this->getController()->Departments->find('all');

        if ($data) {
            $data = $data->toArray();

            foreach ($data as $record) {
                $departments[$record['id']] = $record['title'];
            }
        }

        return $departments;
    }

    public function getRolePermissions($roleID) {
        $this->getController()->loadModel('RolePermissions');

        $data = $this->getController()->RolePermissions->find('all', [
            'conditions' => ['role_id' => $roleID],
            'contain' => ['Permissions']
        ])->toArray();

        $rolePermissions = [];

        if ($data && count($data) > 0) {
            foreach ($data as $key => $value) {
                $rolePermissions[] = $value->permission->title;
            }
        }

        return $rolePermissions;
    }

    public function checkUserAlreadyExists($data) {
        if (isset($data['user_email']) && !empty($data['user_email'])) {
            $this->getController()->loadModel('UserMaster');

            $users = $this->getController()->UserMaster->find('all', [
                'conditions' => ['user_email' => $data['user_email']]
            ])->toArray();

            if (count($users) > 0)
                return true;
            else
                return false;
        } else {
            return false;
        }
    }

    public function getRandomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }

    public function replace_vriable($target_string, $sorce_data)
    {
        foreach($sorce_data as $i=>$sd)
        {
            ${$i} = $sd;
        }

        preg_match_all('~\{\$(.*?)\}~si', $target_string, $matches);
        if ( isset($matches[1]))
        {
            $r = compact($matches[1]);
            foreach ( $r as $var => $value )
            {
                $target_string = str_replace('{$' . $var . '}', $value, $target_string);
            }
        }
        return $target_string;
    }
}
