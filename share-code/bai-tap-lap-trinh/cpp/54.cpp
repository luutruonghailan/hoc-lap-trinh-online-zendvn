#include <iostream>
using namespace std;
int main()
{
    int yourNumber      = 123;

    int rightNumber     = yourNumber % 10; //3
    yourNumber          = yourNumber / 10; //12
    bool isCheck        = true;
    string notice       = "Yes";
    while (yourNumber > 0)
    {
        int lastNumber = yourNumber % 10; //2
        if (rightNumber <= lastNumber)
        {
            isCheck = false;
            break;
        }
        yourNumber    = yourNumber / 10; // 1  
    }
    
    if (isCheck == false)
    {
        notice = "No";
    }
    
    cout << notice << endl;
}