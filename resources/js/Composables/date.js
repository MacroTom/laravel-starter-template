import moment from 'moment';

export const formatDate = (value, format = 'HH:mma DD/MM/yy', relative = false) => {
    return relative ? moment(value).fromNow() : moment(value).format(format);
}