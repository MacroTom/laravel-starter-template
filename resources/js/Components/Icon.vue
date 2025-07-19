<script setup>
import HomeIcon from '@/Svgs/home.svg';
import WarningIcon from '@/Svgs/warning-2.svg';
import MenuIcon from '@/Svgs/menu.svg';
import ArrowLeftIcon from '@/Svgs/arrow-left.svg';
import ArrowRightIcon from '@/Svgs/arrow-right.svg';
import ArrowUpIcon from '@/Svgs/arrow-up.svg';
import ArrowDownIcon from '@/Svgs/arrow-down.svg';
import SettingIcon from '@/Svgs/setting.svg';
import MoonIcon from '@/Svgs/moon.svg';
import SunIcon from '@/Svgs/sun.svg';
import LogoutIcon from '@/Svgs/logout.svg';
import BellIcon from '@/Svgs/notification.svg';
import MoreIcon from '@/Svgs/more.svg';
import MonitorIcon from '@/Svgs/monitor.svg';
import UserSquareIcon from '@/Svgs/user-square.svg';
import EyeIcon from '@/Svgs/eye.svg';
import EyeSlashIcon from '@/Svgs/eye-slash.svg';
import SearchIcon from '@/Svgs/search.svg';
import ShoppingCart from '@/Svgs/shopping-cart.svg'
import DollarSquare from '@/Svgs/dollar-square.svg'
import AddIcon from '@/Svgs/add.svg';
import BoxIcon from '@/Svgs/box.svg';
import OrderIcon from '@/Svgs/order.svg';
import AddonIcon from '@/Svgs/addon.svg';
import DashboardIcon from '@/Svgs/dashboard.svg';
import RiderIcon from '@/Svgs/rider.svg';
import CategoryIcon from '@/Svgs/category.svg';
import UserIcon from '@/Svgs/user.svg';
import CloseCircleIcon from '@/Svgs/close-circle.svg';
import ExportIcon from '@/Svgs/export.svg';
import ViewIcon from '@/Svgs/view.svg';
import ImageIcon from '@/Svgs/gallery-export.svg';
import RoleIcon from '@/Svgs/role.svg';
import MinusIcon from '@/Svgs/minus.svg';
import UserOctagonIcon from '@/Svgs/user-octagon.svg';
import TrashIcon from '@/Svgs/trash.svg';
import MagicStarIcon from '@/Svgs/magic-star.svg';
import MenuItemIcon from '@/Svgs/menu-item.svg';
import EditIcon from '@/Svgs/edit.svg';
import DraftIcon from '@/Svgs/draft.svg';
import TagIcon from '@/Svgs/tag.svg';
import ClockIcon from '@/Svgs/clock.svg';
import BoxAddIcon from '@/Svgs/box-add.svg';
import BackIcon from '@/Svgs/back.svg';
import LocationTickIcon from '@/Svgs/location-tick.svg';
import RoadIcon from '@/Svgs/road.svg';
import TrendUpIcon from '@/Svgs/trend-up.svg';
import UserAddIcon from '@/Svgs/user-add.svg';
import UserRemoveIcon from '@/Svgs/user-remove.svg';
import VideoIcon from '@/Svgs/video.svg';
import VideoSquareIcon from '@/Svgs/video-square.svg';
import CardReceiveIcon from '@/Svgs/card-receive.svg';
import GlobeIcon from '@/Svgs/globe.svg';
import ReceiptIcon from '@/Svgs/receipt.svg';
import UpgradeIcon from '@/Svgs/upgrade.svg';
import TeacherIcon from '@/Svgs/teacher.svg';
import CalendarIcon from '@/Svgs/calendar.svg';
import CalendarAddIcon from '@/Svgs/calendar-add.svg';
import MessageIcon from '@/Svgs/message.svg';
import SendIcon from '@/Svgs/send.svg';
import TickIcon from '@/Svgs/tick-circle.svg';

const props = defineProps({
    name: {
        type: String,
        required: true
    }
});

const icons = {
    home: HomeIcon,
    menu: MenuIcon,
    warning: WarningIcon,
    'arrow-left': ArrowLeftIcon,
    'arrow-right': ArrowRightIcon,
    'arrow-up': ArrowUpIcon,
    'arrow-down': ArrowDownIcon,
    setting: SettingIcon,
    moon: MoonIcon,
    sun: SunIcon,
    logout: LogoutIcon,
    bell: BellIcon,
    more: MoreIcon,
    monitor: MonitorIcon,
    'user-square': UserSquareIcon,
    eye: EyeIcon,
    'eye-slash': EyeSlashIcon,
    'search': SearchIcon,
    'shopping-cart': ShoppingCart,
    'dollar-square' : DollarSquare,
    add: AddIcon,
    box: BoxIcon,
    order: OrderIcon,
    addon: AddonIcon,
    dashboard: DashboardIcon,
    rider: RiderIcon,
    category: CategoryIcon,
    user: UserIcon,
    close: CloseCircleIcon,
    export: ExportIcon,
    view: ViewIcon,
    image: ImageIcon,
    role: RoleIcon,
    minus: MinusIcon,
    'user-role': UserOctagonIcon,
    trash: TrashIcon,
    'magic-star': MagicStarIcon,
    'menu-item': MenuItemIcon,
    edit: EditIcon,
    draft: DraftIcon,
    tag: TagIcon,
    clock: ClockIcon,
    'box-add': BoxAddIcon,
    back: BackIcon,
    'location-tick': LocationTickIcon,
    road: RoadIcon,
    'trend-up': TrendUpIcon,
    'user-add': UserAddIcon,
    'user-remove': UserRemoveIcon,
    video: VideoIcon,
    'video-square': VideoSquareIcon,
    'card-receive': CardReceiveIcon,
    globe: GlobeIcon,
    upgrade: UpgradeIcon,
    receipt: ReceiptIcon,
    teacher: TeacherIcon,
    calendar: CalendarIcon,
    'calendar-add': CalendarAddIcon,
    message: MessageIcon,
    send: SendIcon,
    tick: TickIcon,
}

</script>

<template>
    <KeepAlive>
        <component class="shrink-0" :is="icons[name] ?? icons.warning"></component>
    </KeepAlive>
</template>
