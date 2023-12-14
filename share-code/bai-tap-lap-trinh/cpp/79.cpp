#include<iostream>
using namespace std;
int main()
{
    int yourMonth   = 2;
    int yourYear    = 2022;
    int result      = 0;

    /*
    Các tháng có 31 ngày: 1, 3, 5, 7, 8, 10, 12
    Các tháng có 30 ngày: 4, 6, 9, 11
    Năm nhuận thì tháng 2 có 29 ngày, năm không nhuận thì tháng 2 có 28 ngày
    */
    switch (yourMonth)
    {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            result = 31;
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            result = 30;
            break;
        case 2:
             if (yourYear % 400 == 0 || (yourYear % 4 == 0 && yourYear % 100 != 0))
            {
                result = 29;;
            }else{
                result = 28;
            }
            break;
    }
    // Tháng 2 năm 2000 là tháng có 29 ngày.
    cout << "Tháng " << yourMonth << " năm " << yourYear << " là tháng có " << result <<" ngày.";
    // printf()
}