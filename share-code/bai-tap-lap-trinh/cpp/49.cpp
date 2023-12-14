#include<iostream>
using namespace std;
int main()
{
    // Năm chia 400
    // Năm chia hết cho 4 và không chia hết cho 100  ==> &&
    //  || 
    int yourNumber      = 2022;
    string notice       = "Không là năm nhuận";

    if (yourNumber % 400 == 0 || (yourNumber % 4 == 0 && yourNumber % 100 != 0))
    {
        notice = "Năm nhuận";
    }
    
    cout << notice;
   
}