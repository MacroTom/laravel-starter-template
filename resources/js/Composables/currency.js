import currency from 'currency.js';

export const formatCurrency = (value, precision = 0, symbol = '₦') => {
    return currency(value, {separator: ',', symbol, precision}).format();
}