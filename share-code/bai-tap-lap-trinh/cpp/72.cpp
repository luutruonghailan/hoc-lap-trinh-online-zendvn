#include <iostream>
#include <string>
using namespace std;


int main() {
    int number = 13;
		string result = "";
		string dateVi[] = {"","","Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy", "Chủ nhật"};
		string dateEn[] = {"","","Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"};

		if (number/10 == 1 && number % 10 >= 2 && number % 10 <=8) {
			result = dateEn[number%10];
		}else if (number/10 == 2 && number % 10 >= 2 && number % 10 <=8) {
			result = dateVi[number%10 ];
		}else {
			result = "Không giải mã được";
		}

    cout << "Output: " << result << endl;

    return 0;
}