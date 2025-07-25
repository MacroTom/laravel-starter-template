<?php

namespace App\Enums;

use App\Models\Country;
use Illuminate\Support\Collection;

/**
 * @method static Collection where(string $column, string $value)
 * @method static array all()
 * @method static Collection pluck(string $column)
 */
enum Countries
{
    public static function toArray(): array
    {
        return [
            ['name' => 'Nigeria', 'dial_code' => '+234', 'phone_number_length' => 10, 'iso_code' => 'NG', 'timezone' => 'Africa/Lagos'],
            ['name' => 'Afghanistan', 'dial_code' => '+93', 'phone_number_length' => 9, 'iso_code' => 'AF', 'timezone' => 'Asia/Kabul'],
            ['name' => 'Albania', 'dial_code' => '+355', 'phone_number_length' => 9, 'iso_code' => 'AL', 'timezone' => 'Europe/Tirane'],
            ['name' => 'Algeria', 'dial_code' => '+213', 'phone_number_length' => 9, 'iso_code' => 'DZ', 'timezone' => 'Africa/Algiers'],
            ['name' => 'Andorra', 'dial_code' => '+376', 'phone_number_length' => 6, 'iso_code' => 'AD', 'timezone' => 'Europe/Andorra'],
            ['name' => 'Angola', 'dial_code' => '+244', 'phone_number_length' => 9, 'iso_code' => 'AO', 'timezone' => 'Africa/Luanda'],
            ['name' => 'Argentina', 'dial_code' => '+54', 'phone_number_length' => 10, 'iso_code' => 'AR', 'timezone' => 'America/Argentina/Buenos_Aires'],
            ['name' => 'Armenia', 'dial_code' => '+374', 'phone_number_length' => 8, 'iso_code' => 'AM', 'timezone' => 'Asia/Yerevan'],
            ['name' => 'Australia', 'dial_code' => '+61', 'phone_number_length' => 9, 'iso_code' => 'AU', 'timezone' => 'Australia/Sydney'],
            ['name' => 'Austria', 'dial_code' => '+43', 'phone_number_length' => 10, 'iso_code' => 'AT', 'timezone' => 'Europe/Vienna'],
            ['name' => 'Azerbaijan', 'dial_code' => '+994', 'phone_number_length' => 9, 'iso_code' => 'AZ', 'timezone' => 'Asia/Baku'],
            ['name' => 'Bahamas', 'dial_code' => '+1-242', 'phone_number_length' => 10, 'iso_code' => 'BS', 'timezone' => 'America/Nassau'],
            ['name' => 'Bahrain', 'dial_code' => '+973', 'phone_number_length' => 8, 'iso_code' => 'BH', 'timezone' => 'Asia/Bahrain'],
            ['name' => 'Bangladesh', 'dial_code' => '+880', 'phone_number_length' => 10, 'iso_code' => 'BD', 'timezone' => 'Asia/Dhaka'],
            ['name' => 'Barbados', 'dial_code' => '+1-246', 'phone_number_length' => 10, 'iso_code' => 'BB', 'timezone' => 'America/Barbados'],
            ['name' => 'Belarus', 'dial_code' => '+375', 'phone_number_length' => 9, 'iso_code' => 'BY', 'timezone' => 'Europe/Minsk'],
            ['name' => 'Belgium', 'dial_code' => '+32', 'phone_number_length' => 9, 'iso_code' => 'BE', 'timezone' => 'Europe/Brussels'],
            ['name' => 'Belize', 'dial_code' => '+501', 'phone_number_length' => 7, 'iso_code' => 'BZ', 'timezone' => 'America/Belize'],
            ['name' => 'Benin', 'dial_code' => '+229', 'phone_number_length' => 9, 'iso_code' => 'BJ', 'timezone' => 'Africa/Porto-Novo'],
            ['name' => 'Bhutan', 'dial_code' => '+975', 'phone_number_length' => 8, 'iso_code' => 'BT', 'timezone' => 'Asia/Thimphu'],
            ['name' => 'Bolivia', 'dial_code' => '+591', 'phone_number_length' => 8, 'iso_code' => 'BO', 'timezone' => 'America/La_Paz'],
            ['name' => 'Bosnia and Herzegovina', 'dial_code' => '+387', 'phone_number_length' => 8, 'iso_code' => 'BA', 'timezone' => 'Europe/Sarajevo'],
            ['name' => 'Botswana', 'dial_code' => '+267', 'phone_number_length' => 7, 'iso_code' => 'BW', 'timezone' => 'Africa/Gaborone'],
            ['name' => 'Brazil', 'dial_code' => '+55', 'phone_number_length' => 10, 'iso_code' => 'BR', 'timezone' => 'America/Sao_Paulo'],
            ['name' => 'Brunei', 'dial_code' => '+673', 'phone_number_length' => 7, 'iso_code' => 'BN', 'timezone' => 'Asia/Brunei'],
            ['name' => 'Bulgaria', 'dial_code' => '+359', 'phone_number_length' => 9, 'iso_code' => 'BG', 'timezone' => 'Europe/Sofia'],
            ['name' => 'Burkina Faso', 'dial_code' => '+226', 'phone_number_length' => 8, 'iso_code' => 'BF', 'timezone' => 'Africa/Ouagadougou'],
            ['name' => 'Burundi', 'dial_code' => '+257', 'phone_number_length' => 8, 'iso_code' => 'BI', 'timezone' => 'Africa/Bujumbura'],
            ['name' => 'Cambodia', 'dial_code' => '+855', 'phone_number_length' => 9, 'iso_code' => 'KH', 'timezone' => 'Asia/Phnom_Penh'],
            ['name' => 'Cameroon', 'dial_code' => '+237', 'phone_number_length' => 9, 'iso_code' => 'CM', 'timezone' => 'Africa/Douala'],
            ['name' => 'Canada', 'dial_code' => '+1', 'phone_number_length' => 10, 'iso_code' => 'CA', 'timezone' => 'America/Toronto'],
            ['name' => 'Cape Verde', 'dial_code' => '+238', 'phone_number_length' => 7, 'iso_code' => 'CV', 'timezone' => 'Atlantic/Cape_Verde'],
            ['name' => 'Central African Republic', 'dial_code' => '+236', 'phone_number_length' => 8, 'iso_code' => 'CF', 'timezone' => 'Africa/Bangui'],
            ['name' => 'Chad', 'dial_code' => '+235', 'phone_number_length' => 9, 'iso_code' => 'TD', 'timezone' => 'Africa/Ndjamena'],
            ['name' => 'Chile', 'dial_code' => '+56', 'phone_number_length' => 9, 'iso_code' => 'CL', 'timezone' => 'America/Santiago'],
            ['name' => 'China', 'dial_code' => '+86', 'phone_number_length' => 11, 'iso_code' => 'CN', 'timezone' => 'Asia/Shanghai'],
            ['name' => 'Colombia', 'dial_code' => '+57', 'phone_number_length' => 10, 'iso_code' => 'CO', 'timezone' => 'America/Bogota'],
            ['name' => 'Comoros', 'dial_code' => '+269', 'phone_number_length' => 7, 'iso_code' => 'KM', 'timezone' => 'Indian/Comoro'],
            ['name' => 'Congo', 'dial_code' => '+242', 'phone_number_length' => 9, 'iso_code' => 'CG', 'timezone' => 'Africa/Brazzaville'],
            ['name' => 'Costa Rica', 'dial_code' => '+506', 'phone_number_length' => 8, 'iso_code' => 'CR', 'timezone' => 'America/Costa_Rica'],
            ['name' => 'Croatia', 'dial_code' => '+385', 'phone_number_length' => 9, 'iso_code' => 'HR', 'timezone' => 'Europe/Zagreb'],
            ['name' => 'Cuba', 'dial_code' => '+53', 'phone_number_length' => 8, 'iso_code' => 'CU', 'timezone' => 'America/Havana'],
            ['name' => 'Cyprus', 'dial_code' => '+357', 'phone_number_length' => 8, 'iso_code' => 'CY', 'timezone' => 'Asia/Nicosia'],
            ['name' => 'Czech Republic', 'dial_code' => '+420', 'phone_number_length' => 9, 'iso_code' => 'CZ', 'timezone' => 'Europe/Prague'],
            ['name' => 'Denmark', 'dial_code' => '+45', 'phone_number_length' => 8, 'iso_code' => 'DK', 'timezone' => 'Europe/Copenhagen'],
            ['name' => 'Djibouti', 'dial_code' => '+253', 'phone_number_length' => 6, 'iso_code' => 'DJ', 'timezone' => 'Africa/Djibouti'],
            ['name' => 'Dominica', 'dial_code' => '+1-767', 'phone_number_length' => 10, 'iso_code' => 'DM', 'timezone' => 'America/Dominica'],
            ['name' => 'Dominican Republic', 'dial_code' => '+1-809', 'phone_number_length' => 10, 'iso_code' => 'DO', 'timezone' => 'America/Santo_Domingo'],
            ['name' => 'Ecuador', 'dial_code' => '+593', 'phone_number_length' => 9, 'iso_code' => 'EC', 'timezone' => 'America/Guayaquil'],
            ['name' => 'Egypt', 'dial_code' => '+20', 'phone_number_length' => 10, 'iso_code' => 'EG', 'timezone' => 'Africa/Cairo'],
            ['name' => 'El Salvador', 'dial_code' => '+503', 'phone_number_length' => 8, 'iso_code' => 'SV', 'timezone' => 'America/El_Salvador'],
            ['name' => 'Equatorial Guinea', 'dial_code' => '+240', 'phone_number_length' => 9, 'iso_code' => 'GQ', 'timezone' => 'Africa/Malabo'],
            ['name' => 'Eritrea', 'dial_code' => '+291', 'phone_number_length' => 7, 'iso_code' => 'ER', 'timezone' => 'Africa/Asmara'],
            ['name' => 'Estonia', 'dial_code' => '+372', 'phone_number_length' => 7, 'iso_code' => 'EE', 'timezone' => 'Europe/Tallinn'],
            ['name' => 'Eswatini', 'dial_code' => '+268', 'phone_number_length' => 8, 'iso_code' => 'SZ', 'timezone' => 'Africa/Mbabane'],
            ['name' => 'Ethiopia', 'dial_code' => '+251', 'phone_number_length' => 9, 'iso_code' => 'ET', 'timezone' => 'Africa/Addis_Ababa'],
            ['name' => 'Fiji', 'dial_code' => '+679', 'phone_number_length' => 7, 'iso_code' => 'FJ', 'timezone' => 'Pacific/Fiji'],
            ['name' => 'Finland', 'dial_code' => '+358', 'phone_number_length' => 9, 'iso_code' => 'FI', 'timezone' => 'Europe/Helsinki'],
            ['name' => 'France', 'dial_code' => '+33', 'phone_number_length' => 9, 'iso_code' => 'FR', 'timezone' => 'Europe/Paris'],
            ['name' => 'Gabon', 'dial_code' => '+241', 'phone_number_length' => 7, 'iso_code' => 'GA', 'timezone' => 'Africa/Libreville'],
            ['name' => 'Gambia', 'dial_code' => '+220', 'phone_number_length' => 7, 'iso_code' => 'GM', 'timezone' => 'Africa/Banjul'],
            ['name' => 'Georgia', 'dial_code' => '+995', 'phone_number_length' => 9, 'iso_code' => 'GE', 'timezone' => 'Asia/Tbilisi'],
            ['name' => 'Germany', 'dial_code' => '+49', 'phone_number_length' => 10, 'iso_code' => 'DE', 'timezone' => 'Europe/Berlin'],
            ['name' => 'Ghana', 'dial_code' => '+233', 'phone_number_length' => 9, 'iso_code' => 'GH', 'timezone' => 'Africa/Accra'],
            ['name' => 'Greece', 'dial_code' => '+30', 'phone_number_length' => 10, 'iso_code' => 'GR', 'timezone' => 'Europe/Athens'],
            ['name' => 'Grenada', 'dial_code' => '+1-473', 'phone_number_length' => 10, 'iso_code' => 'GD', 'timezone' => 'America/Grenada'],
            ['name' => 'Guatemala', 'dial_code' => '+502', 'phone_number_length' => 8, 'iso_code' => 'GT', 'timezone' => 'America/Guatemala'],
            ['name' => 'Guinea', 'dial_code' => '+224', 'phone_number_length' => 9, 'iso_code' => 'GN', 'timezone' => 'Africa/Conakry'],
            ['name' => 'Guinea-Bissau', 'dial_code' => '+245', 'phone_number_length' => 7, 'iso_code' => 'GW', 'timezone' => 'Africa/Bissau'],
            ['name' => 'Guyana', 'dial_code' => '+592', 'phone_number_length' => 7, 'iso_code' => 'GY', 'timezone' => 'America/Guyana'],
            ['name' => 'Haiti', 'dial_code' => '+509', 'phone_number_length' => 8, 'iso_code' => 'HT', 'timezone' => 'America/Port-au-Prince'],
            ['name' => 'Honduras', 'dial_code' => '+504', 'phone_number_length' => 8, 'iso_code' => 'HN', 'timezone' => 'America/Tegucigalpa'],
            ['name' => 'Hungary', 'dial_code' => '+36', 'phone_number_length' => 9, 'iso_code' => 'HU', 'timezone' => 'Europe/Budapest'],
            ['name' => 'Iceland', 'dial_code' => '+354', 'phone_number_length' => 7, 'iso_code' => 'IS', 'timezone' => 'Atlantic/Reykjavik'],
            ['name' => 'India', 'dial_code' => '+91', 'phone_number_length' => 10, 'iso_code' => 'IN', 'timezone' => 'Asia/Kolkata'],
            ['name' => 'Indonesia', 'dial_code' => '+62', 'phone_number_length' => 10, 'iso_code' => 'ID', 'timezone' => 'Asia/Jakarta'],
            ['name' => 'Iran', 'dial_code' => '+98', 'phone_number_length' => 10, 'iso_code' => 'IR', 'timezone' => 'Asia/Tehran'],
            ['name' => 'Iraq', 'dial_code' => '+964', 'phone_number_length' => 10, 'iso_code' => 'IQ', 'timezone' => 'Asia/Baghdad'],
            ['name' => 'Ireland', 'dial_code' => '+353', 'phone_number_length' => 9, 'iso_code' => 'IE', 'timezone' => 'Europe/Dublin'],
            ['name' => 'Israel', 'dial_code' => '+972', 'phone_number_length' => 9, 'iso_code' => 'IL', 'timezone' => 'Asia/Jerusalem'],
            ['name' => 'Italy', 'dial_code' => '+39', 'phone_number_length' => 10, 'iso_code' => 'IT', 'timezone' => 'Europe/Rome'],
            ['name' => 'Ivory Coast', 'dial_code' => '+225', 'phone_number_length' => 8, 'iso_code' => 'CI', 'timezone' => 'Africa/Abidjan'],
            ['name' => 'Jamaica', 'dial_code' => '+1-876', 'phone_number_length' => 10, 'iso_code' => 'JM', 'timezone' => 'America/Jamaica'],
            ['name' => 'Japan', 'dial_code' => '+81', 'phone_number_length' => 10, 'iso_code' => 'JP', 'timezone' => 'Asia/Tokyo'],
            ['name' => 'Jordan', 'dial_code' => '+962', 'phone_number_length' => 9, 'iso_code' => 'JO', 'timezone' => 'Asia/Amman'],
            ['name' => 'Kazakhstan', 'dial_code' => '+7', 'phone_number_length' => 10, 'iso_code' => 'KZ', 'timezone' => 'Asia/Almaty'],
            ['name' => 'Kenya', 'dial_code' => '+254', 'phone_number_length' => 9, 'iso_code' => 'KE', 'timezone' => 'Africa/Nairobi'],
            ['name' => 'Kiribati', 'dial_code' => '+686', 'phone_number_length' => 5, 'iso_code' => 'KI', 'timezone' => 'Pacific/Tarawa'],
            ['name' => 'North Korea', 'dial_code' => '+850', 'phone_number_length' => 9, 'iso_code' => 'KP', 'timezone' => 'Asia/Pyongyang'],
            ['name' => 'South Korea', 'dial_code' => '+82', 'phone_number_length' => 10, 'iso_code' => 'KR', 'timezone' => 'Asia/Seoul'],
            ['name' => 'Kuwait', 'dial_code' => '+965', 'phone_number_length' => 8, 'iso_code' => 'KW', 'timezone' => 'Asia/Kuwait'],
            ['name' => 'Kyrgyzstan', 'dial_code' => '+996', 'phone_number_length' => 9, 'iso_code' => 'KG', 'timezone' => 'Asia/Bishkek'],
            ['name' => 'Laos', 'dial_code' => '+856', 'phone_number_length' => 9, 'iso_code' => 'LA', 'timezone' => 'Asia/Vientiane'],
            ['name' => 'Latvia', 'dial_code' => '+371', 'phone_number_length' => 8, 'iso_code' => 'LV', 'timezone' => 'Europe/Riga'],
            ['name' => 'Lebanon', 'dial_code' => '+961', 'phone_number_length' => 8, 'iso_code' => 'LB', 'timezone' => 'Asia/Beirut'],
            ['name' => 'Lesotho', 'dial_code' => '+266', 'phone_number_length' => 8, 'iso_code' => 'LS', 'timezone' => 'Africa/Maseru'],
            ['name' => 'Liberia', 'dial_code' => '+231', 'phone_number_length' => 7, 'iso_code' => 'LR', 'timezone' => 'Africa/Monrovia'],
            ['name' => 'Libya', 'dial_code' => '+218', 'phone_number_length' => 10, 'iso_code' => 'LY', 'timezone' => 'Africa/Tripoli'],
            ['name' => 'Liechtenstein', 'dial_code' => '+423', 'phone_number_length' => 7, 'iso_code' => 'LI', 'timezone' => 'Europe/Vaduz'],
            ['name' => 'Lithuania', 'dial_code' => '+370', 'phone_number_length' => 8, 'iso_code' => 'LT', 'timezone' => 'Europe/Vilnius'],
            ['name' => 'Luxembourg', 'dial_code' => '+352', 'phone_number_length' => 9, 'iso_code' => 'LU', 'timezone' => 'Europe/Luxembourg'],
            ['name' => 'Madagascar', 'dial_code' => '+261', 'phone_number_length' => 9, 'iso_code' => 'MG', 'timezone' => 'Indian/Antananarivo'],
            ['name' => 'Malawi', 'dial_code' => '+265', 'phone_number_length' => 9, 'iso_code' => 'MW', 'timezone' => 'Africa/Blantyre'],
            ['name' => 'Malaysia', 'dial_code' => '+60', 'phone_number_length' => 9, 'iso_code' => 'MY', 'timezone' => 'Asia/Kuala_Lumpur'],
            ['name' => 'Maldives', 'dial_code' => '+960', 'phone_number_length' => 7, 'iso_code' => 'MV', 'timezone' => 'Indian/Maldives'],
            ['name' => 'Mali', 'dial_code' => '+223', 'phone_number_length' => 8, 'iso_code' => 'ML', 'timezone' => 'Africa/Bamako'],
            ['name' => 'Malta', 'dial_code' => '+356', 'phone_number_length' => 8, 'iso_code' => 'MT', 'timezone' => 'Europe/Malta'],
            ['name' => 'Marshall Islands', 'dial_code' => '+692', 'phone_number_length' => 7, 'iso_code' => 'MH', 'timezone' => 'Pacific/Majuro'],
            ['name' => 'Mauritania', 'dial_code' => '+222', 'phone_number_length' => 9, 'iso_code' => 'MR', 'timezone' => 'Africa/Nouakchott'],
            ['name' => 'Mauritius', 'dial_code' => '+230', 'phone_number_length' => 7, 'iso_code' => 'MU', 'timezone' => 'Indian/Mauritius'],
            ['name' => 'Mexico', 'dial_code' => '+52', 'phone_number_length' => 10, 'iso_code' => 'MX', 'timezone' => 'America/Mexico_City'],
            ['name' => 'Micronesia', 'dial_code' => '+691', 'phone_number_length' => 7, 'iso_code' => 'FM', 'timezone' => 'Pacific/Pohnpei'],
            ['name' => 'Moldova', 'dial_code' => '+373', 'phone_number_length' => 8, 'iso_code' => 'MD', 'timezone' => 'Europe/Chisinau'],
            ['name' => 'Monaco', 'dial_code' => '+377', 'phone_number_length' => 8, 'iso_code' => 'MC', 'timezone' => 'Europe/Monaco'],
            ['name' => 'Mongolia', 'dial_code' => '+976', 'phone_number_length' => 8, 'iso_code' => 'MN', 'timezone' => 'Asia/Ulaanbaatar'],
            ['name' => 'Montenegro', 'dial_code' => '+382', 'phone_number_length' => 8, 'iso_code' => 'ME', 'timezone' => 'Europe/Podgorica'],
            ['name' => 'Morocco', 'dial_code' => '+212', 'phone_number_length' => 9, 'iso_code' => 'MA', 'timezone' => 'Africa/Casablanca'],
            ['name' => 'Mozambique', 'dial_code' => '+258', 'phone_number_length' => 9, 'iso_code' => 'MZ', 'timezone' => 'Africa/Maputo'],
            ['name' => 'Myanmar', 'dial_code' => '+95', 'phone_number_length' => 9, 'iso_code' => 'MM', 'timezone' => 'Asia/Yangon'],
            ['name' => 'Namibia', 'dial_code' => '+264', 'phone_number_length' => 9, 'iso_code' => 'NA', 'timezone' => 'Africa/Windhoek'],
            ['name' => 'Nauru', 'dial_code' => '+674', 'phone_number_length' => 7, 'iso_code' => 'NR', 'timezone' => 'Pacific/Nauru'],
            ['name' => 'Nepal', 'dial_code' => '+977', 'phone_number_length' => 10, 'iso_code' => 'NP', 'timezone' => 'Asia/Kathmandu'],
            ['name' => 'Netherlands', 'dial_code' => '+31', 'phone_number_length' => 9, 'iso_code' => 'NL', 'timezone' => 'Europe/Amsterdam'],
            ['name' => 'New Zealand', 'dial_code' => '+64', 'phone_number_length' => 9, 'iso_code' => 'NZ', 'timezone' => 'Pacific/Auckland'],
            ['name' => 'Nicaragua', 'dial_code' => '+505', 'phone_number_length' => 8, 'iso_code' => 'NI', 'timezone' => 'America/Managua'],
            ['name' => 'Niger', 'dial_code' => '+227', 'phone_number_length' => 8, 'iso_code' => 'NE', 'timezone' => 'Africa/Niamey'],
            ['name' => 'North Macedonia', 'dial_code' => '+389', 'phone_number_length' => 8, 'iso_code' => 'MK', 'timezone' => 'Europe/Skopje'],
            ['name' => 'Norway', 'dial_code' => '+47', 'phone_number_length' => 8, 'iso_code' => 'NO', 'timezone' => 'Europe/Oslo'],
            ['name' => 'Oman', 'dial_code' => '+968', 'phone_number_length' => 8, 'iso_code' => 'OM', 'timezone' => 'Asia/Muscat'],
            ['name' => 'Pakistan', 'dial_code' => '+92', 'phone_number_length' => 10, 'iso_code' => 'PK', 'timezone' => 'Asia/Karachi'],
            ['name' => 'Palau', 'dial_code' => '+680', 'phone_number_length' => 7, 'iso_code' => 'PW', 'timezone' => 'Pacific/Palau'],
            ['name' => 'Panama', 'dial_code' => '+507', 'phone_number_length' => 8, 'iso_code' => 'PA', 'timezone' => 'America/Panama'],
            ['name' => 'Papua New Guinea', 'dial_code' => '+675', 'phone_number_length' => 8, 'iso_code' => 'PG', 'timezone' => 'Pacific/Port_Moresby'],
            ['name' => 'Paraguay', 'dial_code' => '+595', 'phone_number_length' => 9, 'iso_code' => 'PY', 'timezone' => 'America/Asuncion'],
            ['name' => 'Peru', 'dial_code' => '+51', 'phone_number_length' => 9, 'iso_code' => 'PE', 'timezone' => 'America/Lima'],
            ['name' => 'Philippines', 'dial_code' => '+63', 'phone_number_length' => 10, 'iso_code' => 'PH', 'timezone' => 'Asia/Manila'],
            ['name' => 'Poland', 'dial_code' => '+48', 'phone_number_length' => 9, 'iso_code' => 'PL', 'timezone' => 'Europe/Warsaw'],
            ['name' => 'Portugal', 'dial_code' => '+351', 'phone_number_length' => 9, 'iso_code' => 'PT', 'timezone' => 'Europe/Lisbon'],
            ['name' => 'Qatar', 'dial_code' => '+974', 'phone_number_length' => 8, 'iso_code' => 'QA', 'timezone' => 'Asia/Qatar'],
            ['name' => 'Romania', 'dial_code' => '+40', 'phone_number_length' => 10, 'iso_code' => 'RO', 'timezone' => 'Europe/Bucharest'],
            ['name' => 'Russia', 'dial_code' => '+7', 'phone_number_length' => 10, 'iso_code' => 'RU', 'timezone' => 'Europe/Moscow'],
            ['name' => 'Rwanda', 'dial_code' => '+250', 'phone_number_length' => 9, 'iso_code' => 'RW', 'timezone' => 'Africa/Kigali'],
            ['name' => 'Saint Kitts and Nevis', 'dial_code' => '+1-869', 'phone_number_length' => 10, 'iso_code' => 'KN', 'timezone' => 'America/St_Kitts'],
            ['name' => 'Saint Lucia', 'dial_code' => '+1-758', 'phone_number_length' => 10, 'iso_code' => 'LC', 'timezone' => 'America/St_Lucia'],
            ['name' => 'Saint Vincent and the Grenadines', 'dial_code' => '+1-784', 'phone_number_length' => 10, 'iso_code' => 'VC', 'timezone' => 'America/St_Vincent'],
            ['name' => 'Samoa', 'dial_code' => '+685', 'phone_number_length' => 7, 'iso_code' => 'WS', 'timezone' => 'Pacific/Apia'],
            ['name' => 'San Marino', 'dial_code' => '+378', 'phone_number_length' => 8, 'iso_code' => 'SM', 'timezone' => 'Europe/San_Marino'],
            ['name' => 'Sao Tome and Principe', 'dial_code' => '+239', 'phone_number_length' => 7, 'iso_code' => 'ST', 'timezone' => 'Africa/Sao_Tome'],
            ['name' => 'Saudi Arabia', 'dial_code' => '+966', 'phone_number_length' => 9, 'iso_code' => 'SA', 'timezone' => 'Asia/Riyadh'],
            ['name' => 'Senegal', 'dial_code' => '+221', 'phone_number_length' => 9, 'iso_code' => 'SN', 'timezone' => 'Africa/Dakar'],
            ['name' => 'Serbia', 'dial_code' => '+381', 'phone_number_length' => 9, 'iso_code' => 'RS', 'timezone' => 'Europe/Belgrade'],
            ['name' => 'Seychelles', 'dial_code' => '+248', 'phone_number_length' => 7, 'iso_code' => 'SC', 'timezone' => 'Indian/Mahe'],
            ['name' => 'Sierra Leone', 'dial_code' => '+232', 'phone_number_length' => 8, 'iso_code' => 'SL', 'timezone' => 'Africa/Freetown'],
            ['name' => 'Singapore', 'dial_code' => '+65', 'phone_number_length' => 8, 'iso_code' => 'SG', 'timezone' => 'Asia/Singapore'],
            ['name' => 'Slovakia', 'dial_code' => '+421', 'phone_number_length' => 9, 'iso_code' => 'SK', 'timezone' => 'Europe/Bratislava'],
            ['name' => 'Slovenia', 'dial_code' => '+386', 'phone_number_length' => 8, 'iso_code' => 'SI', 'timezone' => 'Europe/Ljubljana'],
            ['name' => 'Solomon Islands', 'dial_code' => '+677', 'phone_number_length' => 5, 'iso_code' => 'SB', 'timezone' => 'Pacific/Guadalcanal'],
            ['name' => 'Somalia', 'dial_code' => '+252', 'phone_number_length' => 7, 'iso_code' => 'SO', 'timezone' => 'Africa/Mogadishu'],
            ['name' => 'South Africa', 'dial_code' => '+27', 'phone_number_length' => 9, 'iso_code' => 'ZA', 'timezone' => 'Africa/Johannesburg'],
            ['name' => 'Spain', 'dial_code' => '+34', 'phone_number_length' => 9, 'iso_code' => 'ES', 'timezone' => 'Europe/Madrid'],
            ['name' => 'Sri Lanka', 'dial_code' => '+94', 'phone_number_length' => 9, 'iso_code' => 'LK', 'timezone' => 'Asia/Colombo'],
            ['name' => 'Sudan', 'dial_code' => '+249', 'phone_number_length' => 9, 'iso_code' => 'SD', 'timezone' => 'Africa/Khartoum'],
            ['name' => 'Suriname', 'dial_code' => '+597', 'phone_number_length' => 7, 'iso_code' => 'SR', 'timezone' => 'America/Paramaribo'],
            ['name' => 'Sweden', 'dial_code' => '+46', 'phone_number_length' => 9, 'iso_code' => 'SE', 'timezone' => 'Europe/Stockholm'],
            ['name' => 'Switzerland', 'dial_code' => '+41', 'phone_number_length' => 9, 'iso_code' => 'CH', 'timezone' => 'Europe/Zurich'],
            ['name' => 'Syria', 'dial_code' => '+963', 'phone_number_length' => 9, 'iso_code' => 'SY', 'timezone' => 'Asia/Damascus'],
            ['name' => 'Taiwan', 'dial_code' => '+886', 'phone_number_length' => 9, 'iso_code' => 'TW', 'timezone' => 'Asia/Taipei'],
            ['name' => 'Tajikistan', 'dial_code' => '+992', 'phone_number_length' => 9, 'iso_code' => 'TJ', 'timezone' => 'Asia/Dushanbe'],
            ['name' => 'Tanzania', 'dial_code' => '+255', 'phone_number_length' => 9, 'iso_code' => 'TZ', 'timezone' => 'Africa/Dar_es_Salaam'],
            ['name' => 'Thailand', 'dial_code' => '+66', 'phone_number_length' => 9, 'iso_code' => 'TH', 'timezone' => 'Asia/Bangkok'],
            ['name' => 'Timor-Leste', 'dial_code' => '+670', 'phone_number_length' => 7, 'iso_code' => 'TL', 'timezone' => 'Asia/Dili'],
            ['name' => 'Togo', 'dial_code' => '+228', 'phone_number_length' => 8, 'iso_code' => 'TG', 'timezone' => 'Africa/Lome'],
            ['name' => 'Tonga', 'dial_code' => '+676', 'phone_number_length' => 5, 'iso_code' => 'TO', 'timezone' => 'Pacific/Tongatapu'],
            ['name' => 'Trinidad and Tobago', 'dial_code' => '+1-868', 'phone_number_length' => 10, 'iso_code' => 'TT', 'timezone' => 'America/Port_of_Spain'],
            ['name' => 'Tunisia', 'dial_code' => '+216', 'phone_number_length' => 8, 'iso_code' => 'TN', 'timezone' => 'Africa/Tunis'],
            ['name' => 'Turkey', 'dial_code' => '+90', 'phone_number_length' => 10, 'iso_code' => 'TR', 'timezone' => 'Europe/Istanbul'],
            ['name' => 'Turkmenistan', 'dial_code' => '+993', 'phone_number_length' => 8, 'iso_code' => 'TM', 'timezone' => 'Asia/Ashgabat'],
            ['name' => 'Tuvalu', 'dial_code' => '+688', 'phone_number_length' => 5, 'iso_code' => 'TV', 'timezone' => 'Pacific/Funafuti'],
            ['name' => 'Uganda', 'dial_code' => '+256', 'phone_number_length' => 9, 'iso_code' => 'UG', 'timezone' => 'Africa/Kampala'],
            ['name' => 'Ukraine', 'dial_code' => '+380', 'phone_number_length' => 9, 'iso_code' => 'UA', 'timezone' => 'Europe/Kiev'],
            ['name' => 'United Arab Emirates', 'dial_code' => '+971', 'phone_number_length' => 9, 'iso_code' => 'AE', 'timezone' => 'Asia/Dubai'],
            ['name' => 'United Kingdom', 'dial_code' => '+44', 'phone_number_length' => 10, 'iso_code' => 'GB', 'timezone' => 'Europe/London'],
            ['name' => 'United States', 'dial_code' => '+1', 'phone_number_length' => 10, 'iso_code' => 'US', 'timezone' => 'America/New_York'],
            ['name' => 'Uruguay', 'dial_code' => '+598', 'phone_number_length' => 8, 'iso_code' => 'UY', 'timezone' => 'America/Montevideo'],
            ['name' => 'Uzbekistan', 'dial_code' => '+998', 'phone_number_length' => 9, 'iso_code' => 'UZ', 'timezone' => 'Asia/Tashkent'],
            ['name' => 'Vanuatu', 'dial_code' => '+678', 'phone_number_length' => 7, 'iso_code' => 'VU', 'timezone' => 'Pacific/Efate'],
            ['name' => 'Venezuela', 'dial_code' => '+58', 'phone_number_length' => 10, 'iso_code' => 'VE', 'timezone' => 'America/Caracas'],
            ['name' => 'Vietnam', 'dial_code' => '+84', 'phone_number_length' => 9, 'iso_code' => 'VN', 'timezone' => 'Asia/Ho_Chi_Minh'],
            ['name' => 'Yemen', 'dial_code' => '+967', 'phone_number_length' => 9, 'iso_code' => 'YE', 'timezone' => 'Asia/Aden'],
            ['name' => 'Zambia', 'dial_code' => '+260', 'phone_number_length' => 9, 'iso_code' => 'ZM', 'timezone' => 'Africa/Lusaka'],
            ['name' => 'Zimbabwe', 'dial_code' => '+263', 'phone_number_length' => 9, 'iso_code' => 'ZW', 'timezone' => 'Africa/Harare'],
        ];
    }

    public static function isoCodes(): array
    {
        return array_map(function ($country) {
            return $country['iso_code'];
        }, self::toArray());
    }

    protected static function collection(): Collection
    {
        return collect(self::toArray())
            ->map(fn ($item) => new Country($item));
    }

    public static function __callStatic($name, $arguments)
    {
        return self::collection()->{$name}(...$arguments);
    }
}
