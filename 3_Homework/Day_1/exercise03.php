<?php declare(strict_types=1);

class Password
{

    public static function checkComplexity(string $pass): bool
    {
        $conditions = ["/^.{6,}$/", "/.*[a-z]/", "/.*[A-Z]/"];
        $count = 0;
        foreach ($conditions as $regex){
            $count += preg_match($regex,$pass);
        }
        echo "Complexity = " . $count . "<br>";

        return $count == count($conditions);
    }

}
echo Password::checkComplexity('12abCDEfd') ? 'yes' : 'no';
