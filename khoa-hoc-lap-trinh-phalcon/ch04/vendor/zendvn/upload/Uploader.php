<?php 
    namespace Multiphalcon\Vendor\Zendvn\Upload;
    class Uploader
    {
        public function  upload($elementName, $folder, $changeName = false)
        {
            //upload
            $request = new \Phalcon\Http\Request();
            if($request->hasFiles(true))
            {
                $uploadFile = $request->getUploadedFiles(true);
                foreach ($uploadFile as $file)
                {
                    if($file->getKey() == $elementName)
                    {
                        if($changeName == false)
                        {
                            $destination = $folder.$file->getName();
                        }
                        else 
                        {
                            $arrName   = array_merge(range('a','z'),range(0,9));
                            $name = substr(str_shuffle(implode('', $arrName)), 0, 5);
                            $destination = $folder.$name.'.'.$file->getExtension();
                        }
                        
                        $file->moveTo($destination);
                    }
                }
               
            }
           
        }
    }
