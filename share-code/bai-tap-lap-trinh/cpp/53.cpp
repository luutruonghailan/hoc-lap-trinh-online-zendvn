#include<iostream>
using namespace std;
int main()
{
    // Xác định các chữ số của số có phải là số chẵn
    int yourNumber      = 208;
    bool isCheck        = true;
    string notice       = "yes";
    while (yourNumber > 0)
    {
        int lastNumber  = yourNumber%10;
        if (lastNumber % 2 != 0)
        {
            isCheck = false;
            break;
        }
        yourNumber = yourNumber / 10;   
    }
    
    if (isCheck == false)
    {
        notice = "no";
    }
    
    cout << notice  << endl;
}