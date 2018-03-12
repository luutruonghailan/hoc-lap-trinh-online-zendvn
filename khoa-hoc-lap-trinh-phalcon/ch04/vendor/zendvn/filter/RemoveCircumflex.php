<?php
    namespace Multiphalcon\Vendor\Zendvn\Filter;
    class RemoveCircumflex
    {
       
        
        public function filter($input)
        {
            $patternA       = '#(á|à|ã|ả|ạ|ă|ắ|ằ|ặ|ẵ|ẳ|â|ấ|ầ|ẫ|ẩ|ậ|Á|À|Ã|Ả|Ạ|Ắ|Ằ|Ẵ|Ẳ|Ặ|Â|Ầ|Ấ|Ẫ|Ẩ|Ậ)#imsU';
            $replacementA    = 'a';
            $output         = preg_replace($patternA, $replacementA, $input);
            
            $patternD       = '#(đ|Đ)#imsU';
            $replacementD    = 'd';
            $output         = preg_replace($patternD, $replacementD, $output);
            
            $patternE       = '#(è|é|ẽ|ẻ|ẹ|ê|ề|ế|ễ|ể|ệ|È|É|Ẽ|Ẻ|Ẹ|Ê|Ề|Ế|Ễ|Ể|Ệ)#imsU';
            $replacementE   = 'e';
            $output         = preg_replace($patternE, $replacementE, $output);
            
            $patternI       = '#(ì|í|ị|ĩ|ỉ|I|Í|Ị|Ĩ|Ỉ)#imsU';
            $replacementI   = 'i';
            $output         = preg_replace($patternI, $replacementI, $output);
            
            $patternO       = '#(ò|ó|õ|ỏ|ọ|ô|ồ|ố|ỗ|ổ|ộ|ơ|ờ|ớ|ỡ|ợ|Ò|Ó|Õ|Ỏ|Ọ|Ô|Ồ|Ố|Ỗ|Ổ|Ộ|Ơ|Ờ|Ớ|Ỡ|Ợ)#imsU';
            $replacementO   = 'o';
            $output         = preg_replace($patternO, $replacementO, $output);
            
            $patternU       = '#(ù|ú|ũ|ủ|ụ|ư|ứ|ừ|ữ|ử|ựÙ|Ú|Ũ|Ủ|Ụ|Ư|Ứ|Ừ|Ữ|Ử|Ự)#imsU';
            $replacementU   = 'u';
            $output         = preg_replace($patternU, $replacementU, $output);
            
            $patternY       = '#(ỳ|ý|ỹ|ỷ|ỵ|Ỳ|Ý|Ỹ|Ỷ|Ỵ)#imsU';
            $replacementY   = 'y';
            $output         = preg_replace($patternY, $replacementY, $output);
            
            return $output;
        }
        //zendvn là một trung tâm đào tạo lập trình chuyên nghiệp
        /*
         * á à ã ả ạ ă ắ ằ ặ ẵ ẳ â ấ ầ ẫ ẩ ậ => a
            đ => d
            è é ẽ ẻ ẹ ê ề ế ễ ể ệ => e
            ì í ị ĩ ỉ => i
            ò ó õ ỏ ọ ô ồ ố ỗ ổ ộ ơ ờ ớ ỡ ợ => o
            ù ú ũ ủ ụ ư ứ ừ ữ ử ự => u
            ỳ ý ỹ ỷ ỵ => y

         */
        
    }