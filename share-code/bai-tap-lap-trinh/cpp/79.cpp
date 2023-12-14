#include <iostream>
using namespace std;
#include <string>

int main()
{
    int yourYear = 2023;
    int yourMonth = 2;
    string result;

    switch (yourMonth) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            result = "31";
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            result = "30";
            break;
        case 2:
            if ( yourYear % 400 == 0 || (yourYear % 4 == 0  && yourYear % 100 != 0)) {
                result = "29";
            } else {
                result = "28";
            }
            break;
        }
    cout << "Tháng " << yourMonth << " có "  << result << " ngày";
}
